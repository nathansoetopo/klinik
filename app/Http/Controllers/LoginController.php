<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function checkCredential()
    {
        $credential = request()->input('credential');
        $fieldType = filter_var($credential, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $credential]);
        return $fieldType;
    }

    public function login(Request $request)
    {
        try {
            // check client login dengan username atau email
            $credentialType = $this->checkCredential();
            //validasi email atau username user
            if ($credentialType === "email") {
                $credentialValidation = 'email|required';
            } else {
                $credentialValidation = 'required';
                //cek user yang login dengan username, kemudian mengambil datanya
                $user = User::where('username', request('credential'))->first();
            }
            $validator = Validator::make(request()->all(), [
                'credential' => $credentialValidation,
                'password' => "required",
            ]);
            // jika fail saat divalidasi
            if ($validator->fails()) {
                return redirect('/login')->withErrors($validator)->withInput();
            }
            // khusus untuk client jika login dari username
            if ($credentialType == 'username') {
                if ($user == null) {
                    //ketika user login dengan username, kemudian username tidak ditemukan
                    return redirect('/login')->with('error', 'Username tidak ditemukan');
                } else {
                    $email = $user->email;
                }
            }
            // if ($user->provider_id != null) {
            //     return ResponseFormatter::error(null, 'Anda login menggunakan google', 403);
            // }
            // jika client menggunakan username, maka email diambil dari variabel email sebelumnya,
            // jika menggunakan email maka langsung mengambil dari request credentialnya
            $credential = $email ?? request('credential');
            $password = request('password');
            $credentials = [
                'email' => $credential,
                'password' => $password,
            ];
            $user = User::with('roles')->where('email', $credential)->first();
            if (!$user) {
                return redirect('/login')->with('error', 'Email tidak ditemukan');
            }
            if (!Hash::check($password, $user->password, [])) {
                return redirect('/login')->with('error', 'Password salah');
            }
            Auth::login($user);
            if ($user->hasRole('admin')) {
                return redirect('/admin')->with('status', 'Login berhasil');
            }
        } catch (Exception $error) {
            return redirect('/login')->with('error', $error);
        }
    }

    public function logout()
    {
        $user = request()->user();
        return redirect('/login')->with('status', 'Berhasil logout');
    }
}
