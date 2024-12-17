<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Development_exercise;
use App\Models\Exercise;
use App\Models\Exercise_comment;
use App\Models\Exercise_report;
use App\Models\Exercise_visualization;
use App\Models\Exercise_visualization_unregistered;
use App\Models\Header_exercise;
use App\Models\Image;
use App\Models\Item;
use App\Models\Section;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExerciseController extends Controller
{

    public function index()
    {
        $sectors = Sector::orderBy('id')->get();

        return view('index', compact('sectors'));
    }

    public function sector(Sector $sector)
    {
        $chapters = Chapter::where('sector_id', $sector->id)->get();

        return view('exercises.sector', compact('sector', 'chapters'));
    }

    public function chapter(Chapter $chapter)
    {
        $sections = Section::where('chapter_id', $chapter->id)->get();

        return view('exercises.chapter', compact('chapter', 'sections'));
    }

    public function section(Section $section)
    {
        $items = Item::where('section_id', $section->id)->get();

        return view('exercises.section', compact('section', 'items'));
    }

    public function item(Item $item)
    {
        $exercises = Exercise::with('Header_exercise')->where('item_id', $item->id)->orderBy('order', 'asc')->paginate(7);
        $background_image = Image::where('name', 'fondo_cuadriculado')->first();

        return view('exercises.item', compact('item', 'background_image', 'exercises'));
    }

    public function show(Exercise $exercise)
    {

        //Obtener variables necesarias para la vista show
        $background_cuaderno = Image::where('name', 'fondo_cuaderno')->first();
        $background_cuadros = Image::where('name', 'fondo_cuadriculado')->first();
        $header_exercise = Header_exercise::where('exercise_id', $exercise->id)->first();
        $development_exercises = Development_exercise::where('exercise_id', $exercise->id)->oldest()->get();
        $user = Auth::user();

        $previous_exercise = Exercise::where('id', '<', $exercise->id)->orderBy('id', 'desc')->first();
        $next_exercise = Exercise::where('id', '>', $exercise->id)->orderBy('id', 'asc')->first();


        // Obtener el usuario autenticado
        $user = Auth::user();

        if (Auth::check()) {
            // Obtener la hora de inicio del ejercicio
            $start_time = session('start_time');
            if (!$start_time) {
                session(['start_time' => time()]);
                $start_time = session('start_time');
            }

            // Calcular la duración actual del ejercicio en segundos
            $durationInSeconds = time() - $start_time;

            // Obtener el ID del ejercicio que el usuario estaba viendo antes de cambiar al ejercicio actual
            $previousExerciseId = session('previous_exercise_id');
            if ($previousExerciseId) {
                $previousExercise = Exercise::find($previousExerciseId);

                // Actualizar o crear un nuevo registro en la tabla exercise_user_duration
                $exerciseDuration = $previousExercise->exercise_user_durations()
                    ->where('user_id', auth()->id())
                    ->first();

                if ($exerciseDuration) {
                    $exerciseDuration->duration = $exerciseDuration->duration + $durationInSeconds;
                    $exerciseDuration->updated_at = now();
                    $exerciseDuration->save();
                } else {
                    $previousExercise->exercise_user_durations()->create([
                        'user_id' => auth()->id(),
                        'duration' => 0
                    ]);

                    // Actualizar la duración total de todos los registros en la tabla exercise_user_durations
                    $previousExercise->exercise_user_durations()->update([
                        'duration' => DB::raw('duration + ' . $durationInSeconds)
                    ]);
                }

                // Obtener la duración total del usuario para este ejercicio
                $totalDuration = $previousExercise->exercise_user_durations()
                    ->where('user_id', auth()->id())
                    ->sum('duration');
            }

            // Guardar la hora de inicio del ejercicio en la sesión
            session(['start_time' => time()]);

            // Guardar el ID del ejercicio actual en la sesión
            session(['previous_exercise_id' => $exercise->id]);
        }

        // Cargar cantidad de "me gusta" del ejercicio
        /* $exercise->loadCount('exercise_likes'); */

        // Incrementa la cantidad de visualizaciones del ejercicio
        $exercise->increment('view_count');

        // Verifica si el usuario actual está autenticado
        if (auth()->check()) {

            // Si el usuario está autenticado, crear o actualizar una visualización
            $existingVisualization = $exercise->exercise_visualizations()
                ->where('user_id', auth()->id())
                ->first();

            if ($existingVisualization) {
                $existingVisualization->touch();
            } else {
                $exerciseVisualization = new Exercise_visualization([
                    'user_id' => auth()->id(),
                    'exercise_id' => $exercise->id,
                ]);
                $exercise->exercise_visualizations()->save($exerciseVisualization);
            }
        } else {

            // Si el usuario no está autenticado, realiza un seguimiento en la base de datos
            $visitorId = session('visitor_id');
            if (!$visitorId) {
                $visitorId = Str::uuid();
                session(['visitor_id' => $visitorId]);
            }

            $existingVisualization = Exercise_visualization_unregistered::where('exercise_id', $exercise->id)
                ->where('visitor_id', $visitorId)
                ->first();

            if ($existingVisualization) {
                $existingVisualization->touch();
            } else {
                $exerciseVisualization = new Exercise_visualization_unregistered([
                    'exercise_id' => $exercise->id,
                    'visitor_id' => $visitorId,
                ]);
                $exerciseVisualization->save();
            }

            // Verifica si el usuario ha visto más de 3 ejercicios
            $viewedExercisesCount = Exercise_visualization_unregistered::where('visitor_id', $visitorId)
                ->count();
            $hasViewedMoreThan3Exercises = $viewedExercisesCount > 5;

            // Verifica si el usuario no registrado ha visto más de 5 ejercicios
            if (!$hasViewedMoreThan3Exercises) {
                // Si el usuario no ha visto más de 3 ejercicios, mostrar la vista show
                return view('exercises.show', compact('exercise', 'background_cuaderno', 'background_cuadros', 'header_exercise', 'development_exercises', 'previous_exercise', 'next_exercise'));
            } else {
                // Si el usuario ha visto más de 3 ejercicios, mostrar un mensaje de error
                return redirect('/register')->with('error', 'Debe registrarse para ver más de 5 ejercicios.');
            }
        }

        return view('exercises.show', compact('user','exercise', 'background_cuaderno', 'background_cuadros', 'header_exercise', 'development_exercises', 'previous_exercise', 'next_exercise'));
    }

    public function comments_store(Request $request)
    {
        $request->validate([
            'comment_content' => 'required|string|max:255',
            'exercise_id' => 'required|exists:exercises,id',
            'parent_id' => ($request->has('parent_id')) ? 'exists:exercise_comments,id' : 'nullable',
        ]);

        $comment = new Exercise_comment();
        $comment->comment_content = $request->comment_content;
        $comment->user_id = Auth::id();
        $comment->exercise_id = $request->exercise_id;
        $comment->parent_id = $request->parent_id; //hay un error con este parent_id
        $comment->save();

        // Obtener el ejercicio relacionado con el comentario
        $exercise = Exercise::find($request->exercise_id);
        $exercise->load('exercise_comments');

        return redirect()->back();
    }

    public function comments_destroy($id)
    {
        $comment = Exercise_comment::findOrFail($id);
        if ($comment->user_id == Auth::user()->id) {
            $this->deleteCommentAndResponses($comment->id);
        }
        return back();
    }

    public function deleteCommentAndResponses($commentId)
    {
        $comment = Exercise_comment::find($commentId);
        $this->deleteResponses($comment->id);
        $comment->delete();
    }

    public function deleteResponses($parentId)
    {
        $responses = Exercise_comment::where('parent_id', $parentId)->get();
        foreach ($responses as $response) {
            $this->deleteResponses($response->id);
            $response->delete();
        }
    }

    public function exercise_report(Request $request, Exercise $exercise)
    {
        // Valida el formulario enviado por el usuario
        $request->validate([
            'description' => 'required|string',
        ]);

        // Crea un nuevo registro en la tabla exercise_reports
        $report = new Exercise_report();
        $report->user_id = auth()->id();
        $report->exercise_id = $exercise->id;
        $report->description_error = $request->input('description');
        $report->status = 'activo';
        $report->save();

        // Redirige al usuario a la página del ejercicio
        return redirect()->route('exercise.show', $exercise);
    }
}
