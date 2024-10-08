<?php

namespace App\Listeners;

use App\Notifications\SuccessResetPassword;
use Illuminate\Auth\Events\PasswordReset;

class SendPasswordResetEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        $user = $event->user;

        $user->notify(new SuccessResetPassword($user));
    }
}
