<?php

namespace App\Notifications;

use MVC\Models\CadPaciente\CadPaciente;
use MVC\Models\CadConsulta\CadConsulta;
use MVC\Models\CadPodologo\CadPodologo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class ObrigadoPelaConsulta extends Notification implements ShouldQueue {

    use Queueable;

    public $consulta;
    public $paciente;
    public $podologo;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(CadConsulta $consulta, CadPaciente $paciente, CadPodologo $podologo)
    {
        $this->consulta = $consulta;
        $this->paciente = $paciente;
        $this->podologo = $podologo;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(Lang::get('assunto_obrigado_pela_consulta'))
            ->greeting(Lang::get('ola_nome', ['nome' => $this->paciente->nome_paciente]))
            ->line(Lang::get('linha_obrigado_pela_consulta_1'))
            ->line(Lang::get('linha_obrigado_pela_consulta_2'))
            ->line(Lang::get('linha_obrigado_pela_consulta_3', ['data' => setDataFormatoBr($this->consulta->data_consulta)]))
            ->line(Lang::get('linha_obrigado_pela_consulta_4', ['podologo' => $this->podologo->nome_podologo]))
            ->line(Lang::get('linha_obrigado_pela_consulta_5', ['valor' => number_format($this->consulta->valor, 2, ',', '.')]))
            ->line(Lang::get('linha_obrigado_pela_consulta_6', ['procedimento' => $this->consulta->procedimento]))
            ->salutation(Lang::get('saudacao_email'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
