<?php

namespace CRM\Models\CadArquivoDigital;

use CRM\Base\CRMModel;

class CadArquivoDigital extends CRMModel {

    protected $table      = 'cad_arquivo_digital';
    protected $primaryKey = 'id_arquivo';
    protected $guarded    = [''];
}
