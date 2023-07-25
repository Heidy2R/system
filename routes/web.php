<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoActividadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (\Illuminate\Http\Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('usuariosroles', App\Http\Controllers\UsuariosroleController::class);
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('carreras', App\Http\Controllers\CarreraController::class);
Route::resource('empleadoscarreras', App\Http\Controllers\EmpleadoscarreraController::class);
Route::resource('periodos', App\Http\Controllers\PeriodoController::class);



// Ruta para mostrar la lista de registros
Route::get('/empleadoactividades', [EmpleadoActividadController::class, 'index'])->name('empleadoactividades.index');

// Ruta para mostrar el formulario de creación de un nuevo registro
Route::get('/empleadoactividades/create', [EmpleadoActividadController::class, 'create'])->name('empleadoactividades.create');

// Ruta para almacenar un nuevo registro en la base de datos
Route::post('/empleadoactividades', [EmpleadoActividadController::class, 'store'])->name('empleadoactividades.store');

// Ruta para mostrar el formulario de edición de un registro existente
Route::get('/empleadoactividades/{id}/edit', [EmpleadoActividadController::class, 'edit'])->name('empleadoactividades.edit');

// Ruta para actualizar un registro existente en la base de datos
Route::put('/empleadoactividades/{id}', [EmpleadoActividadController::class, 'update'])->name('empleadoactividades.update');

// Ruta para eliminar un registro existente de la base de datos
Route::delete('/empleadoactividades/{id}', [EmpleadoActividadController::class, 'destroy'])->name('empleadoactividades.destroy');
