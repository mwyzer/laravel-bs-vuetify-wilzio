<?php

namespace App\Jobs\API;

use App\Mail\API\SendForgotPasswordRequestEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendForgotPasswordRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $email;

    /**
     * Create a new job instance.
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            // Find the User
            $user = User::whereEmail($this->email)->firstOrFail();

            // Send the email to user
            Mail::to($user->email)
                ->send(new SendForgotPasswordRequestEmail($user));

            Log::info('Email Job processed successfully!');
        } catch (\Exception $e) {
            // Log::error('Something went wrong while sending the email job');
            Log::error($e->getMessage());
        }
    }
}
