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
use App\Notifications\SendOtpFirtAccess;

Route::get('/notification', function () {
    $user = \MVC\Models\User\User::first();
    $newCode = \MVC\Models\FirstAccess\FirstAccess::first();

    return (new SendOtpFirtAccess($user, $newCode))
        ->toMail('teste@teste.com');
});

Route::get('/', function () {
    return view('consulta/recibo');
});
