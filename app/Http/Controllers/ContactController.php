<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email',
            'company' => 'nullable|string|max:160',
            'phone'   => 'nullable|string|max:60',
            'message' => 'required|string|min:10',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Silakan centang reCAPTCHA.',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret'), // ✅ ambil dari config, bukan langsung env()
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $captcha_success = data_get($response->json(), 'success');

        if (!$captcha_success) {
            return back()->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'])->withInput();
        }


        return back()->with('ok', 'Terima kasih! Pesan Anda sudah kami terima.');
    }
}
