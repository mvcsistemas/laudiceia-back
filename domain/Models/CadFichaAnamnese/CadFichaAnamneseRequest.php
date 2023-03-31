<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCRequest;

class CadFichaAnamneseRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_ficha'                 => '',
            'meia'                     => 'required',
            'calcado'                  => 'required',
            'num_calcado'              => 'required',
            'cirurgia_membro_inferior' => 'required',
            'hipertensao'              => 'required',
            'esporte'                  => 'required',
            'hepatite'                 => 'required',
            'medicamento'              => 'required',
            'hiv'                      => 'required',
            'alergia'                  => 'required',
            'psoriase'                 => 'required',
            'dermatite'                => 'required',
            'hanseniase'               => 'required',
            'acido_urico'              => 'required',
            'tempo'                    => 'required',
            'diabetes'                 => 'required',
            'tireoide'                 => 'required',
            'circulatorio'             => 'required',
            'antecedentes'             => 'required',
            'sensibilidade'            => 'required',
            'perfusao_pd'              => 'required',
            'perfusao_pe'              => 'required',
            'digito_pressao_pd'        => 'required',
            'digito_pressao_pe'        => 'required',
            'monofilamento_pd'         => 'required',
            'monofilamento_pe'         => 'required',
            'pat_dermatologicas_pd'    => 'required',
            'pat_dermatologicas_pe'    => 'required',
            'pat_ungueais_pd'          => 'required',
            'pat_ungueais_pe'          => 'required',
            'observacoes'              => 'required',
            'id_paciente'              => '',
            'created_at'               => '',
            'updated_at'               => '',
        ];
    }

    public function messages()
    {
        return [
            'meia.required'             => 'O campo Meia mais utilizada é obrigatório.',
            'calcado.required'          => 'O campo Calçado mais utilizado é obrigatório.',
            'num_calcado.required'           => 'O campo Nº do Calçado é obrigatório.',
            'cirurgia_membro_inferior.required'  => 'O campo Já fez cirurgia nos membros inferiores? é obrigatório',
            'hipertensao.required'         => 'O campo Hipertensão Arterial é obrigatório.',
            'esporte.required'           => 'O campo Pratica algum esporte? é obrigatório.',
            'hepatite.required'           => 'O campo Hepatite é obrigatório.',
            'medicamento.required'    => 'O campo Faz uso de algum medicamento? é obrigatório.',
            'hiv.required'     => 'O campo HIV / DST é obrigatório.',
            'alergia.required'        => 'O campo Alergia? é obrigatório',
            'psoriase.required'             => 'O campo Psoríase é obrigatório',
            'dermatite.required'             => 'O campo Dermatite é obrigatório',
            'hanseniase.required'             => 'O campo Hanseníase é obrigatório',
            'acido_urico.required'             => 'O campo Ácido úrico elevado? é obrigatório',
            'tempo.required'             => 'O campo Passsa mais tempo é obrigatório',
            'tireoide.required'             => 'O campo Tireoide? é obrigatório',
            'circulatorio.required'             => 'O campo Problemas Circulatórios? é obrigatório',
            'sensibilidade.required'             => 'O campo Sensibilidade à dor é obrigatório',
            'perfusao_pd.required'             => 'O campo Perfusão (Pé direito) é obrigatório',
            'perfusao_pe.required'             => 'O campo Perfusão (Pé esquerdo) é obrigatório',
            'digito_pressao_pd.required'             => 'O campo Dígito Pressão (Pé direito) é obrigatório',
            'digito_pressao_pe.required'             => 'O campo Dígito Pressão (Pé esquerdo) é obrigatório',
            'monofilamento_pd.required'             => 'O campo Teste com Monofilamento (Pé direito) é obrigatório',
            'monofilamento_pe.required'             => 'O campo Teste com Monofilamento (Pé esquerdo) é obrigatório',
            'pat_dermatologicas_pd.required'             => 'O campo Patologias Dermatológicas (Pé direito) é obrigatório',
            'pat_dermatologicas_pe.required'             => 'O campo Patologias Dermatológicas (Pé esquerdo) é obrigatório',
            'pat_ungueais_pd.required'             => 'O campo Patologias Ungueais Presentes (Pé direito) é obrigatório',
            'pat_ungueais_pe.required'             => 'O campo Patologias Ungueais Presentes (Pé esquerdo) é obrigatório',
            'observacoes.required'             => 'O campo Observações extras é obrigatório',
        ];
    }
}
