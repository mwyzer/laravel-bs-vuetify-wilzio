@component('mail::panel')
# Reset Password Notification

Hello {{ $user->name }},

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => $resetUrl])
Reset Password
@endcomponent

This reset link is valid for 30 minutes from the time it was requested.

If you did not request a password reset, no further action is required.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
