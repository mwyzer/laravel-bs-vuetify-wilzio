<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\API\SendForgotPasswordRequestJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ForgotPasswordController extends Controller
{
    /**
     * Hit Forgot Password Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPasswordAuth(Request $request)
    {

        // Validate the Request
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email']
        ]);

        try {
            // Dispatch the Job and Send Email
            dispatch(new SendForgotPasswordRequestJob($request->email));

            // Return a success response, indicating that email has sent
            return response()->json(['message' => 'Request of Sending Email Password Sent!'], Response::HTTP_OK);
        } catch (\Exception $e) {
            // Throw an exception that sending of email fails
            return response()->json(['message' => 'Request of Sending Email Password Change Fails!'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show Password Page
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showResetPasswordPage(User $user)
    {
        return view('auth.reset-password', compact('user'));
    }

    /**
     * Hit Change Password Reset Request
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPasswordAuth(Request $request, User $user)
    {
        // Validate the Request
        $request->validate([
            'password' => ['required', 'min:8', 'string'],
            'confirmed_password' => ['required_with:password', 'same:password']
        ]);

        try {
            // Update the password
            $user->updateOrFail([
                'password' => $request->password
            ]);

            // Return a success response, indicating that email has sent
            return response()->json(['message' => 'Password Changed Successfully!'], Response::HTTP_OK);
        } catch (\Exception $e) {
            // Throw an exception that sending of email fails
            return response()->json(['message' => 'Password did not Changed Successfully!'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
