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

//Confirma Agendamento
Route::put('confirma-agendamento', 'CadAgendamento\CadAgendamentoController@confirmaAgendamento')->name('confirma.agendamento');

    //First Access
Route::post('first-access/generate-otp', 'FirstAccess\FirstAccessController@generate')->name('first-acess.generate-otp');
Route::post('first-access/check-otp', 'FirstAccess\FirstAccessController@checkCodeForNewPassword')->name('first-acess.check-otp');
Route::post('first-access/create-password', 'FirstAccess\FirstAccessController@createPassword')->name('first-acess.create-password');

Route::name('api.')->middleware(['auth', 'auth.session'])->group(function () {
    Route::prefix('painel')->name('painel.')->group(function () {
        Route::get('info-geral', 'Painel\PainelController@infoGeral');
        Route::get('info-dinheiro', 'Painel\PainelController@infoDinheiro');
        Route::get('info-faturamento', 'Painel\PainelController@infoFaturamento');
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('', 'User\UserController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('clinica')->name('clinica.')->group(function () {
        Route::get('lookup', 'CadClinica\CadClinicaController@lookup');
        Route::resource('', 'CadClinica\CadClinicaController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('podologo')->name('podologo.')->group(function () {
        Route::get('lookup', 'CadPodologo\CadPodologoController@lookup');
        Route::resource('', 'CadPodologo\CadPodologoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('funcionario')->name('funcionario.')->group(function () {
        Route::resource('', 'CadFuncionario\CadFuncionarioController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('departamento')->name('departamento.')->group(function () {
        Route::get('lookup', 'CadDepartamento\CadDepartamentoController@lookup');
        Route::resource('', 'CadDepartamento\CadDepartamentoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });

    Route::prefix('paciente')->name('paciente.')->group(function () {
        Route::get('lookup', 'CadPaciente\CadPacienteController@lookup');
        Route::resource('', 'CadPaciente\CadPacienteController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);

        Route::prefix('{uuid}')->group(function () {
            Route::get('ficha_anamnese_pdf', 'CadFichaAnamnese\CadFichaAnamneseController@fichaAnamnesePdf');
            Route::get('ficha_anamnese', 'CadFichaAnamnese\CadFichaAnamneseController@hasFichaAnamnese');
            Route::put('ficha_anamnese/{id_ficha}', 'CadFichaAnamnese\CadFichaAnamneseController@update');
            Route::resource('ficha_anamnese', 'CadFichaAnamnese\CadFichaAnamneseController', ['except' => ['index', 'create', 'edit', 'update', 'destroy']]);
        });
    });

    Route::prefix('consulta')->name('consulta.')->group(function () {
        Route::get('historico', 'CadConsulta\CadConsultaController@historicoConsulta')->name('historico');
        Route::get('termo_aceitacao/{uuid_paciente}', 'CadConsulta\CadConsultaController@termoAceitacao')->name('termoAceitacao');
        Route::get('recibo/{uuid_consulta}', 'CadConsulta\CadConsultaController@recibo')->name('recibo');
        Route::resource('', 'CadConsulta\CadConsultaController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);

        Route::group(['prefix' => '{uuid}'], function () {
            Route::get('arquivo/{id_aquivo}/download', 'CadConsulta\CadConsultaImagem\CadConsultaImagemController@download')->name('arquivo.download');
            Route::get('arquivo', 'CadConsulta\CadConsultaImagem\CadConsultaImagemController@lists')->name('arquivo.lists');
            Route::post('arquivo', 'CadConsulta\CadConsultaImagem\CadConsultaImagemController@store')->name('arquivo.store');
            Route::resource('arquivo', 'CadConsulta\CadConsultaImagem\CadConsultaImagemController', ['except' => ['create', 'edit', 'index']])->parameters(['' => 'id_arquivo']);
        });
    });

    Route::prefix('agendamento')->name('agendamento.')->group(function () {
        Route::put('{uuid}/updateDragDrop', 'CadAgendamento\CadAgendamentoController@updateDragDrop')->name('updateDragDrop');

        Route::resource('', 'CadAgendamento\CadAgendamentoController', ['except' => ['create', 'edit']])->parameters(['' => 'uuid']);
    });
});


