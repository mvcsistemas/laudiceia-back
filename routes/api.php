<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Login WEB
Route::post('/login', 'Auth\AuthenticateController@login');
Route::post('/logout', 'Auth\AuthenticateController@logout');

//Login API
Route::post('/loginApi', 'Auth\AuthenticateController@loginApi');
Route::post('/logoutApi', 'Auth\AuthenticateController@logoutApi')->middleware('auth:sanctum');

//Reset Password
Route::post('forgot-password', 'ResetPassword\NewPasswordController@forgotPassword')->name('password.forgot');
Route::post('reset-password', 'ResetPassword\NewPasswordController@resetPassword')->name('password.reset');

Route::name('api.')->middleware(['auth', 'auth.session'])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('', 'User\UserController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('clinica')->name('clinica.')->group(function () {
        Route::resource('', 'CadClinica\CadClinicaController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('medico')->name('medico.')->group(function () {
        Route::resource('', 'CadMedico\CadMedicoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('funcionario')->name('funcionario.')->group(function () {
        Route::resource('', 'CadFuncionario\CadFuncionarioController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('departamento')->name('departamento.')->group(function () {
        Route::resource('', 'CadDepartamento\CadDepartamentoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('clinica_medico')->name('clinica_medico.')->group(function () {
        Route::resource('', 'CadClinicaMedico\CadClinicaMedicoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });
});


