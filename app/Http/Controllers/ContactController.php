<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactController extends Controller
{
    public function send(Request $request)
{
    // 1. Validación de reCAPTCHA
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret'   => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $captchaData = $response->json();

    if (!$captchaData['success'] || $captchaData['score'] < 0.3) {
        return back()->with('error', 'La verificación de seguridad falló.');
    }

    // 2. Validación de campos
    $datos = $request->validate([
        'nombre'   => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email'    => 'required|email',
        'telefono' => 'required',
        'ciudad'   => 'required|string',
    ]);

    // 3. Envío (Limpio, porque la configuración ya vive en config/mail.php)
    try {
        Mail::to(['contacto@lovelydress.com.mx', 'ab@agenciavandu.com'])
            ->send(new ContactoMailable($datos));

        return back()->with('success', '¡Cita agendada! Nos comunicaremos contigo pronto.');

    } catch (\Exception $e) {
        return back()->with('error', 'Lo sentimos, hubo un problema técnico al enviar el correo.');
    }
}
}