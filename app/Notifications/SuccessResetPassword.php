<?php

namespace App\Notifications;

use MVC\Models\User\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class SuccessResetPassword extends Notification implements ShouldQueue {

    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
            ->subject(Lang::get('assunto_sucesso_redefinir_senha'))
            ->greeting(Lang::get('ola_nome', ['nome' => $this->user->tipoCadastro->nome_podologo ?? $this->user->tipoCadastro->nome_funcionario]))
            ->line(Lang::get('linha_sucesso_redefinir_senha_1'))
            ->line(Lang::get('linha_sucesso_redefinir_senha_2', ['email' => $this->user->email]))
            ->action(Lang::get('recuperar_conta'), env('FRONT_URL') . '/forgot-password')
            ->line(Lang::get('linha_sucesso_redefinir_senha_3'))
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
