<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\emailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function postLogin(Request $request)
    {
        // user login email
        $user = User::where('email', $request->email)->first();
        // user login username
        $userUsername = User::where('username', $request->email)->first();

        // check if user login email is exist
        if ($user) {
            // check if user login email is verified
            if ($user->email_verified_at != null) {
                // check if user login email is exist
                if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->back()->withErrors(['error' => 'Email atau password salah']);
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'Email belum diverifikasi']);
            }
        } else if ($userUsername) {
            // check if user login username is verified
            if ($userUsername->email_verified_at != null) {
                // check if user login username is exist
                if (auth()->attempt(['username' => $request->email, 'password' => $request->password])) {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->back()->withErrors(['error' => 'Username atau password salah']);
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'Username belum diverifikasi']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Email atau username tidak ditemukan']);
        }
    }

    public function postRegister(RegisterRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        $emailVerif = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        Mail::to($user->email)->send(new emailVerification($emailVerif));

        try {
            $endpoint = getenv('ZENZIVA_ENDPOINT');
            $userKey = getenv("ZENZIVA_USERKEY");
            $passKey = getenv("ZENZIVA_PASSKEY");
            $message = "Terima kasih sudah mendaftar di natadana silahkan cek email untuk verifikasi akun anda";
            $client = new Client();

            $client->request('POST', $endpoint, [
                'form_params' => [
                    'userkey' => $userKey,
                    'passkey' => $passKey,
                    'to' => $request->phone,
                    'message' => $message
                ]
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => $th->getMessage()]);
        }

        return redirect()->back()->with('success', 'Berhasil mendaftar, silahkan cek email untuk verifikasi akun anda');
    }

    public function emailVerify($email)
    {
        $user = User::where('email', $email)->first();
        if ($user->email_verified_at == null) {
            $user->email_verified_at = now();
            $user->save();
            return redirect()->route('login')->with('success', 'Email berhasil diverifikasi');
        } else {
            return redirect()->route('login')->withErrors('Email sudah diverifikasi');
        }
    }
}
