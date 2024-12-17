<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactoController;
use App\Livewire\ExerciseUser;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\WebhooksController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadExerciseController;
use App\Livewire\ExerciseUploadForm;
use App\Http\Controllers\UniversityController;

//INDEX
Route::get('/filepond', function () {
    return view('enconstruccion');
});

Route::get('/',                                     [ExerciseController::class, 'index'])->name('exercises.index');
Route::get('nosotros',                              [ImageController::class, 'nosotros'])->name('nosotros');
Route::get('planes',                                [ImageController::class, 'planes'])->name('planes');

//CONTACTO
Route::get('/contacto',                             [ContactoController::class, 'mostrarFormulario'])->name('contacto.mostrarFormulario');
Route::post('/contacto',                            [ContactoController::class, 'enviarMensaje'])->name('contacto.enviarMensaje');

//BUSCADOR
Route::get('/search',                               [SearchController::class, 'searchExercises'])->name('search');

//EJERCICIOS
Route::get('/sectors/{sector?}',                    [ExerciseController::class, 'sector'])->name('exercises.sector');
Route::get('/chapters/{chapter?}',                  [ExerciseController::class, 'chapter'])->name('exercises.chapter');
Route::get('/sections/{section?}',                  [ExerciseController::class, 'section'])->name('exercises.section');
Route::get('/items/{item?}',                        [ExerciseController::class, 'item'])->name('exercises.item');
Route::get('exercises/{exercise}',                  [ExerciseController::class, 'show'])->name('exercises.show');

//UNIVERSIDADES
Route::get('/countries',                            [UniversityController::class, 'index'])->name('countries.index');
Route::get('/universities/certamen/{exercise_id}',  [UniversityController::class, 'showCertamen'])->name('universities.certamen');
Route::get('/universities/guia/{id}',               [UniversityController::class, 'showGuia'])->name('universities.guia');
Route::get('/universities/exercises/{exercise_id}', [UniversityController::class, 'showDevelopmentExercises'])->name('universities.show');

//EJERCICIOS SELECCIONADOS DE USUARIO
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('exerciseuser', ExerciseUser::class)->name('exerciseuser.index');
});

//EJERCICIOS COMENTARIOS Y REPORTES
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::post('/exercise-comments', [ExerciseController::class, 'comments_store'])->name('exercise.comments_store');
    Route::delete('/comments/{comment?}', [ExerciseController::class, 'comments_destroy'])->name('exercise.comments_destroy');
    Route::post('/exercise/{exercise}/report', [ExerciseController::class, 'exercise_report'])->name('exercise.report');
});

//EJERCICIOS SUBIDOS A CLOUDINARY
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('exercise/upload', [UploadExerciseController::class, 'showUploadForm'])->name('upload.show');
    Route::post('exercise/upload', [ExerciseUploadForm::class, 'upload'])->name('upload.upload');

    //vista de ejercicios enviados para alumnos
    Route::get('exercise/upload/user', [UploadExerciseController::class, 'uploadUser'])->name('exercises.uploadUser');
    //vista de ejercicios enviados para profesores
    Route::get('exercise/upload/teacher', [UploadExerciseController::class, 'uploadTeacher'])->name('exercises.uploadTeacher');

    //vista de ejercicios seleccionados para alumno
    Route::get('exercise/upload/selected/user', [UploadExerciseController::class, 'uploadSelectedUser'])->name('exercises.uploadSelectedUser');
    //vista de ejercicios seleccionados para profesor
    Route::get('exercise/upload/selected/teacher', [UploadExerciseController::class, 'uploadSelectedTeacher'])->name('exercises.uploadSelectedTeacher');
});

//PERFIL PUBLICO PROFESORES
Route::get('/user/profile/teacher/{id}', [TeacherController::class, 'show'])->name('profile.teacher');
//EDITAR PERFIL DE PROFESORES
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/update/profile/teacher/', [TeacherController::class, 'showUpdateForm'])->name('profile.showTeacher');
    Route::post('/update/profile/teacher/', [TeacherController::class, 'updateProfileTeacher'])->name('profile.updateTeacher');
});

//PAGOS
/* Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show'); */
//MercadoPago Webhook
Route::post('webhooks', WebhooksController::class);
//MercadoPago Webhook Test
/* Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay'); */

//LOGIN RRSS SOCIALITE
Route::get('/auth/facebook', [SocialiteController::class, 'redirectFacebook']);
Route::get('/auth/facebook/callback', [SocialiteController::class, 'callbackFacebook']);
Route::get('/auth/google', [SocialiteController::class, 'redirectGoogle']);
Route::get('/auth/google/callback', [SocialiteController::class, 'callbackGoogle']);

