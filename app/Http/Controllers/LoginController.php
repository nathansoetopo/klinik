<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'min:8|required',
        ]);
        if ($validator->fails()) {
            return ResponseFormatter::error($validator, $validator->messages(), 400);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::attempt(['email' => $request->email, 'password' => $request->password]);
                $token = $user->createToken('authToken')->plainTextToken;
                $data = [
                    'user' => $user->load('roles'),
                    'Token Type' => 'Bearer Token',
                    'Token' => $token,
                ];
                return ResponseFormatter::success($data, 'Login sukses');
            }
            return ResponseFormatter::error(null, 'Password anda salah', 417);
        }
        return ResponseFormatter::error(null, 'Email anda salah', 417);
    }

    public function logout()
    {
        $token = request()->user()->currentAccessToken()->delete();

        return ResponseFormatter::success(
            $token,
            'Token Revoked'
        );
    }
}
