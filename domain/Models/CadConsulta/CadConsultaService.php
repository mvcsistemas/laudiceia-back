<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCService;
use MVC\Models\CadPaciente\CadPaciente;
use Dompdf\Dompdf;

class CadConsultaService extends MVCService {

    protected CadConsulta $model;

    public function __construct(CadConsulta $model)
    {
        $this->model = $model;
    }

    public function setDomPdf(){
        $dompdf  = new Dompdf();
        $options = $dompdf->getOptions();
        $options->setDefaultFont('Courier');
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);
        return $dompdf;
    }

    public function termoAceitacao($uuid)
    {
        $paciente = CadPaciente::findByUuid($uuid);

        $html = view('consulta/termo_aceitacao', ['paciente' => $paciente])->render();

        $dompdf = $this->setDomPdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return  $dompdf->stream($paciente->cpf);
    }

    public function recibo($uuid)
    {
        $consulta = CadConsulta::findByUuid($uuid)
                                ->join('cad_paciente', 'cad_paciente.id_paciente', 'cad_consulta.id_paciente')
                                ->first();

        $html = view('consulta/recibo', ['consulta' => $consulta])->render();

        $dompdf = $this->setDomPdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return  $dompdf->stream($consulta->id_consulta);
    }
}
