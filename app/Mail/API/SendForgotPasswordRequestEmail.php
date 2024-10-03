<?php

namespace App\Mail\API;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SendForgotPasswordRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    private User $user;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        // Generate URL Link Valid for 30 Minutes Only
        $url = URL::temporarySignedRoute(
            'password.reset',
            now()->addMinutes(30),
            ['user' => $this->user],
        );

        return $this->from('vuetify@do.notreply.com')
            ->subject('Send Forgot Password Request Email')
            ->markdown('mail.auth.forgot-password')
            ->with([
                'user' => $this->user,
                'resetUrl' => $url,
            ]);
    }
}
