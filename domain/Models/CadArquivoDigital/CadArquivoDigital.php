<?php

namespace MVC\Models\CadArquivoDigital;

use MVC\Base\MVCModel;

class CadArquivoDigital extends MVCModel {

    protected $table      = 'cad_arquivo_digital';
    protected $primaryKey = 'id_arquivo';
    protected $guarded    = [''];
}
