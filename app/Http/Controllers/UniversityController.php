<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\HeaderExUniversity;
use App\Models\DevelopmentExUniversity;
use App\Models\Image;
use App\Models\ExerciseUniversity;

class UniversityController extends Controller
{
    /**
     * Muestra la vista con el componente Livewire para seleccionar universidades.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('universities.index'); // La vista donde se incluye el componente Livewire
    }

    /* 
    FUNCION PARA VER PDF

    public function showCertamen($exercise_id)
    {
        $header = HeaderExUniversity::where('exercise_university_id', $exercise_id)->firstOrFail();

        // Construir la URL del archivo PDF desde la base de datos
        $pdfUrl = Storage::url($header->image_path);

        return view('universities.certamen', [
            'header' => $header,
            'pdfUrl' => $pdfUrl
        ]);
    } */

    public function showCertamen($id)
    {
        // Obtener el certamen
        $certamen = ExerciseUniversity::findOrFail($id);

        // Obtener los encabezados (imágenes) del certamen
        $headers = HeaderExUniversity::where('exercise_university_id', $id)->get();

        // Obtener los ejercicios del certamen (aquellos cuyo parent_id es igual al id del certamen)
        $exercises = ExerciseUniversity::where('parent_id', $id)->get();

        return view('universities.certamen', compact('certamen', 'headers', 'exercises'));
    }

    public function showGuia($id)
    {
        // Obtener la guía
        $guia = ExerciseUniversity::findOrFail($id);
    
        // Obtener los encabezados (imágenes) de la guía
        $headers = HeaderExUniversity::where('exercise_university_id', $id)->get();
    
        // Obtener los ejercicios de la guía (aquellos cuyo parent_id es igual al id de la guía)
        // y agruparlos por número de página
        $exercises = ExerciseUniversity::where('parent_id', $id)
            ->get()
            ->groupBy('page_num');
    
        return view('universities.guia', compact('guia', 'headers', 'exercises'));
    }

    /**
     * Muestra la vista con el encabezado y desarrollo de un ejercicio.
     */
    public function showDevelopmentExercises($exercise_id)
    {
        // Obtener imagenes de fondo para el header y desarrollo
        $background_cuaderno = Image::where('name', 'fondo_cuaderno')->first();
        $background_cuadros = Image::where('name', 'fondo_cuadriculado')->first();

        // Obtener el encabezado del ejercicio correspondiente
        $header = HeaderExUniversity::where('exercise_university_id', $exercise_id)->firstOrFail();

        // Obtener todos los desarrollos del ejercicio correspondiente
        $developments = DevelopmentExUniversity::where('exercise_university_id', $exercise_id)->get();

        // Construir la URL de la imagen del encabezado
        $headerImageUrl = Storage::url($header->image_path);

        // Construir las URLs de las imágenes de desarrollo
        $developmentImageUrls = $developments->map(function ($development) {
            return Storage::url($development->image_path);
        });

        // Pasar las URLs de las imágenes y los fondos a la vista
        return view('universities.show', [
            'headerImageUrl' => $headerImageUrl,
            'developmentImageUrls' => $developmentImageUrls,
            'background_cuaderno' => $background_cuaderno,
            'background_cuadros' => $background_cuadros,
        ]);
    }
}
