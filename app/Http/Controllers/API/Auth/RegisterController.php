<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    /**
     * Hit Register Request to Form
     *
     * @param Request $request
     * @return Illuminate\Http\Response\Json
     */
    public function registerAuth(Request $request)
    {

        // Validate the Form
        $validatedData = $request->validate([
            'name' => ['required', 'max:60', 'string'],
            'email' => ['required', 'email', 'unique:users,email', 'string'],
            'password' => ['required', 'min:8', 'string'],
            'password_confirmation' => ['required', 'same:password', 'min:8']
        ]);

        // Wrap in try catch, if register success then proceed otherwise
        // Throw a exception error
        try {
            // Register User
            User::createWithTransaction($validatedData);

            return response()->json(
                ['message' => 'Registered Success'],
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
