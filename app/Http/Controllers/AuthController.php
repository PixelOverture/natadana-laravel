<?php

namespace App\Http\Controllers;

use App\Mail\emailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

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

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

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
