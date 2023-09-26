<?php

namespace MVC\Models\CadAgendamento;

use MVC\Base\MVCService;
use Illuminate\Validation\ValidationException;

class CadAgendamentoService extends MVCService {

    protected CadAgendamento $model;

    public function __construct(CadAgendamento $model)
    {
        $this->model = $model;
    }

    public function confirmaAgendamento($request)
    {
        $agendamento = $this->model->where('uuid', $request['uuid_agendamento'])->first();

        if(!$agendamento){
            throw ValidationException::withMessages([
                'agendamento' => 'Agendamento não encontrado!'
                ]);
        }

        if($agendamento && $agendamento->id_status != '0'){
            throw ValidationException::withMessages([
                'agendamento' => 'Você já enviou uma resposta. Caso necessário entre em contato com a nossa equipe!'
                ]);
        }

        $agendamento->update(['id_status' => $request['confirma_agendamento']]);
    }
}
