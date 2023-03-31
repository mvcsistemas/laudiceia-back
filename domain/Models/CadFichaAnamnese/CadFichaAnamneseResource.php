<?php

namespace MVC\Models\CadFichaAnamnese;

use Illuminate\Http\Resources\Json\JsonResource;

class CadFichaAnamneseResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'id_ficha'                 => $this->id_ficha,
            'meia'                     => $this->meia,
            'calcado'                  => $this->calcado,
            'num_calcado'              => $this->num_calcado,
            'cirurgia_membro_inferior' => $this->cirurgia_membro_inferior,
            'hipertensao'              => $this->hipertensao,
            'esporte'                  => $this->esporte,
            'hepatite'                 => $this->hepatite,
            'medicamento'              => $this->medicamento,
            'hiv'                      => $this->hiv,
            'alergia'                  => $this->alergia,
            'psoriase'                 => $this->psoriase,
            'dermatite'                => $this->dermatite,
            'hanseniase'               => $this->hanseniase,
            'acido_urico'              => $this->acido_urico,
            'tempo'                    => $this->tempo,
            'diabetes'                 => $this->diabetes,
            'tireoide'                 => $this->tireoide,
            'circulatorio'             => $this->circulatorio,
            'antecedentes'             => $this->antecedentes,
            'sensibilidade'            => $this->sensibilidade,
            'perfusao_pd'              => $this->perfusao_pd,
            'perfusao_pe'              => $this->perfusao_pe,
            'digito_pressao_pd'        => $this->digito_pressao_pd,
            'digito_pressao_pe'        => $this->digito_pressao_pe,
            'monofilamento_pd'         => $this->monofilamento_pd,
            'monofilamento_pe'         => $this->monofilamento_pe,
            'pat_dermatologicas_pd'    => $this->pat_dermatologicas_pd,
            'pat_dermatologicas_pe'    => $this->pat_dermatologicas_pe,
            'pat_ungueais_pd'          => $this->pat_ungueais_pd,
            'pat_ungueais_pe'          => $this->pat_ungueais_pe,
            'observacoes'              => $this->observacoes,
            'id_paciente'              => $this->id_paciente,
            'created_at'               => $this->created_at,
            'updated_at'               => $this->updated_at,
        ];

        return $retorno;
    }
}
