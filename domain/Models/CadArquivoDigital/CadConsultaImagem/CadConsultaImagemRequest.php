<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCRequest;

class CadConsultaImagemRequest extends MVCRequest {

    public function rules()
    {
        return [
            'id_arquivo'   => '',
            'arq_conteudo' => 'required|file',
            'nome_arquivo' => 'required',
            'observacao'   => '',
            'id_consulta'  => '',
            'created_at'   => '',
        ];
    }

    public function messages()
    {
        return [
            'arq_conteudo.required' => 'O campo Arquivo é obrigatório.',
            'arq_conteudo.file'     => 'O documento não é um arquivo válido',
            'nome_arquivo.required' => 'Nome do arquivo é obrigatório.',
        ];
    }
}
