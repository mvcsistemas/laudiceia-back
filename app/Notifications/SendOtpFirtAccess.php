<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use MVC\Models\FirstAccess\FirstAccess;
use MVC\Models\User\User;

class SendOtpFirtAccess extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;
    public $newCode;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, FirstAccess $newCode)
    {
        $this->user = $user;
        $this->newCode = $newCode;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject(Lang::get('assunto_primeiro_acesso'))
                ->greeting(Lang::get('ola_nome', ['nome' => $this->user->tipoCadastro->nome_podologo ?? $this->user->tipoCadastro->nome_funcionario]))
                ->line(Lang::get('linha_primeiro_acesso_1'))
                ->line(Lang::get('linha_primeiro_acesso_2'))
                ->action($this->newCode->otp, config("mvc.front_url") . '/first-access/' . $this->newCode->user_uuid)
                ->line(Lang::get('linha_primeiro_acesso_3'))
                ->salutation(Lang::get('saudacao_email'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
