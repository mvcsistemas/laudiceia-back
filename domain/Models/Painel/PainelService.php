<?php

namespace MVC\Models\Painel;

use MVC\Base\MVCService;
use MVC\Models\CadFuncionario\CadFuncionario;
use MVC\Models\CadPaciente\CadPaciente;
use MVC\Models\CadFichaAnamnese\CadFichaAnamnese;
use MVC\Models\CadConsulta\CadConsulta;

class PainelService extends MVCService {

    public function infoGeral(){
        $funcionarios = CadFuncionario::where('ativo', 1)->count();
        $pacientes    = CadPaciente::count();
        $fichas       = CadFichaAnamnese::count();
        $consultas    = CadConsulta::count();

        return [
            'funcionarios' => $funcionarios,
            'pacientes'    => $pacientes,
            'fichas'       => $fichas,
            'consultas'    => $consultas,
        ];
    }
}
