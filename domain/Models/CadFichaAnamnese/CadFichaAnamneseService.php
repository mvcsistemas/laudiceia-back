<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCService;
use MVC\Models\CadPaciente\CadPaciente;
use Barryvdh\DomPDF\Facade\Pdf;

class CadFichaAnamneseService extends MVCService {

    protected CadFichaAnamnese $model;

    public function __construct(CadFichaAnamnese $model)
    {
        $this->model = $model;
    }

    public function hasFichaAnamnese($uuid){
        $query  = $this->model->index();
        $params = ['uuid' => $uuid];

        return $this->filter($query, $params)->first();
    }

    public function fichaAnamnesePdf($uuid)
    {
        $paciente       = CadPaciente::findByUuid($uuid);
        $ficha_anamnese = $this->model->select('*')
                                      ->where('id_paciente', $paciente->id_paciente)
                                      ->first();
        $pdf            = Pdf::loadview('ficha_anamnese.ficha', compact(['paciente', 'ficha_anamnese']));

        return $pdf->download('ficha_anamnese_' . $paciente->id_paciente . '.pdf');
    }
}
