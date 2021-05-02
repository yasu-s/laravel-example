<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $accessToken = Auth::user()->createToken('authToken')->plainTextToken;
        return response()->json([
            'access_token' => $accessToken,
        ]);
    }
}
