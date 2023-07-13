<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Notifications\ObrigadoPelaConsulta;

Route::get('/notification', function () {
    $paciente = \MVC\Models\CadPaciente\CadPaciente::first();
    $consulta = \MVC\Models\CadConsulta\CadConsulta::first();

    return (new ObrigadoPelaConsulta($paciente, $consulta))
        ->toMail('teste@teste.com');
});

Route::get('/', function () {
    return view('ficha_anamnese/ficha');
});
