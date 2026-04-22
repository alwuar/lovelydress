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
        // 1. Validar el token de Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $captchaData = $response->json();

        if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
            return back()->with('error', 'Fallo de seguridad (Bot detectado).');
        }

        // 2. Validar los campos del formulario
        $datos = $request->validate([
            'nombre'   => 'required',
            'apellido' => 'required',
            'email'    => 'required|email',
            'telefono' => 'required',
            'ciudad'   => 'required',
        ]);

        // 3. Enviar el correo
        // Aquí enviamos los datos a tu correo
        Mail::to('contacto@lovelydress.com.mx', 'ab@agenciavandu.com')->send(new ContactoMailable($datos));

        return back()->with('success', '¡Cita agendada! Nos comunicaremos contigo pronto.');
    }
}