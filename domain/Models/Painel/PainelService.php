<?php

namespace MVC\Models\Painel;

use Illuminate\Support\Facades\DB;
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

    public function infoDinheiro(){
        $data_atual    = date('Y-m-d');
        $mes_atual     = date('m');
        $ano_atual     = date('Y');
        $dia           = date('w');
        $semana_inicio = date('Y-m-d', strtotime('-'.$dia.' days'));
        $semana_fim    = date('Y-m-d', strtotime('+'.(6-$dia).' days'));

        $ganho_diario = CadConsulta::select('valor')
                                    ->where('data_consulta', '=', $data_atual)
                                    ->sum('valor');

        $ganho_semanal = CadConsulta::select('valor')
                                    ->where('data_consulta', '>=', $semana_inicio)
                                    ->where('data_consulta', '<=', $semana_fim)
                                    ->sum('valor');

        $ganho_mensal = CadConsulta::select('valor')
                                    ->whereMonth('data_consulta', '=', $mes_atual)
                                    ->whereYear('data_consulta', '=', $ano_atual)
                                    ->sum('valor');

        $ganho_anual = CadConsulta::select('valor')
                                    ->whereYear('data_consulta', '=', $ano_atual)
                                    ->sum('valor');

        return [
            'ganho_diario'  => number_format($ganho_diario, '2', ',', '.'),
            'ganho_semanal' => number_format($ganho_semanal, '2', ',', '.'),
            'ganho_mensal'  => number_format($ganho_mensal, '2', ',', '.'),
            'ganho_anual'   => number_format($ganho_anual, '2', ',', '.')
        ];
    }

    public function infoFaturamento(){
        $ano_atual = date('Y');

        $meses = CadConsulta::selectRaw('MONTH(data_consulta) as mes, SUM(valor) as total')
                            ->groupBy(DB::raw('MONTH(data_consulta)'))
                            ->whereYear('data_consulta', '=', $ano_atual)
                            ->get();

        $anos = CadConsulta::selectRaw('YEAR(data_consulta) as ano, SUM(valor) as total')
                            ->groupBy(DB::raw('YEAR(data_consulta)'))
                            ->orderBy('ano')
                            ->get();

        return [
            'meses' => $meses,
            'anos'  => $anos
        ];
    }
}
