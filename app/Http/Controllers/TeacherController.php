<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_detail;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function show($id)
    {
        $teacher = User::findOrFail($id);

        // Verificar si el usuario es un teacher
        if ($teacher->type !== 'Profesor' && $teacher->type !== 'Ambos') {
            abort(404);
        }

        return view('profile.teacher', compact('teacher'));
    }

    public function showUpdateForm()
    {
        $userId = Auth::user()->id;

        // Verificar si el usuario cumple con los criterios
        $user = User::where('id', $userId)
            ->whereIn('type', ['Profesor', 'Ambos'])
            ->first();

        if (!$user) {
            // Usuario no cumple con los criterios, redirigir a página de error 404
            abort(404);
        }

        $user_details = User_Detail::where('user_id', Auth::user()->id)->first();
        return view('profile.update-profile-teacher', compact('user_details'));
    }

    public function updateProfileTeacher(Request $request)
    {

        $request->validate([
            'about' => 'required',
            'specialty' => 'required',
            'masters_diplomas' => 'required',
            'experience' => 'required',
            'file'  => 'require|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'about.required' => 'El campo "Acerca de mí" es obligatorio.',
            'specialty.required' => 'El campo "Especialista en" es obligatorio.',
            'masters_diplomas.required' => 'El campo "Másters o diplomas" es obligatorio.',
            'experience.required' => 'El campo "Experiencia" es obligatorio.',
            'file.required' => 'El campo "Foto de perfil" es obligatorio.',
            'file.image' => 'El campo "Foto de perfil" debe ser una imagen.',
            'file.mimes' => 'El campo "Foto de perfil" debe ser un archivo de tipo: jpeg, png, jpg, gif, svg.',
            'file.max' => 'El campo "Foto de perfil" debe ser menor a 2MB.',
        ]);

        if ($request->fails()) {
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        $result = $request->file('file')->storeOnCloudinary('Upload/Headers');
        $uploadedFileUrl = $result->getSecurePath();

        // Obtener el usuario autenticado
        $userId = auth()->user()->id;

        // Obtener los datos del formulario
        $about = $request->input('about');
        $specialty = $request->input('specialty');
        $masters_diplomas = $request->input('masters_diplomas');
        $experience = $request->input('experience');

        $userDetail = User_detail::where('user_id', $userId)->first();

        if ($userDetail) {
            $userDetail->about = $about;
            $userDetail->specialty = $specialty;
            $userDetail->masters_diplomas = $masters_diplomas;
            $userDetail->experience = $experience;
            $userDetail->example_exerc_photo1 = $uploadedFileUrl;
            $userDetail->save();
        } else {
            $userDetail = new User_detail();
            $userDetail->user_id = $userId;
            $userDetail->about = $about;
            $userDetail->specialty = $specialty;
            $userDetail->masters_diplomas = $masters_diplomas;
            $userDetail->experience = $experience;
            $userDetail->example_exerc_photo1 = $uploadedFileUrl;

            // Asociar el detalle de usuario al usuario actual
            $userDetail->save();
        }

    }
}
