<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCService;
use Dompdf\Dompdf;

class CadConsultaService extends MVCService {

    protected CadConsulta $model;

    public function __construct(CadConsulta $model)
    {
        $this->model = $model;
    }

    public function termoAceitacao()
    {
        $html = view('consulta/termo_aceitacao')->render();

        $dompdf = new Dompdf();
        $options = $dompdf->getOptions();
        $options->setDefaultFont('Courier');
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return  $dompdf->stream('nome_do_arquivo.pdf');
    }
}
