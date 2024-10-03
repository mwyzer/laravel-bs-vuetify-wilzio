<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    /**
     * Hit Login Request to Form
     *
     * @param Request $request
     * @return Illuminate\Http\Response\Json
     */
    public function loginAuth(Request $request)
    {

        // Validate the Form
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email', 'string'],
            'password' => ['required', 'min:8', 'string']
        ]);

        // Wrap in try catch, if login success then proceed otherwise
        // Throw a exception error
        try {
            if (auth()->attempt($credentials)) {
                // Authentication passed, generate token
                $user = auth()->user();
                $token = $user->createToken('AuthToken')->plainTextToken;

                return response()->json(
                    [
                        'message' => 'Login Success',
                        'token' => $token,
                        'user' => $user,
                    ],
                    Response::HTTP_OK
                );
            } else {
                // Authentication failed
                return response()->json(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json(
                ['message' => 'Login Success'],
                Response::HTTP_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                ['message' => 'Something went wrong'],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
