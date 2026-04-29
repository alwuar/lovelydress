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

        if (!$captchaData['success'] || $captchaData['score'] < 0.3) {
            return back()->with('error', 'Fallo de seguridad (Bot detectado).');
        } 
        if (!$captchaData['success']) {
    dd("Google rechazó la petición", $captchaData);
}

if ($captchaData['score'] < 0.5) {
    dd("Google dice que eres un bot. Tu score es: " . $captchaData['score']);
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
        try {
        // FORZAMOS LA CONFIGURACIÓN AQUÍ MISMO PARA EVITAR ERRORES DE CACHÉ
        config([
            'mail.mailers.smtp.host' => 'mail.lovelydress.com.mx',
            'mail.mailers.smtp.port' => 587,
            'mail.mailers.smtp.encryption' => 'tls',
            'mail.mailers.smtp.username' => env('MAIL_USERNAME'),
            'mail.mailers.smtp.password' => env('MAIL_PASSWORD'),
        ]);

        Mail::to(['contacto@lovelydress.com.mx', 'ab@agenciavandu.com'])
            ->send(new ContactoMailable($datos));

        return back()->with('success', '¡Cita agendada!');
        
    } catch (\Exception $e) {
        // Esto nos dirá si el problema cambió de "SSL" a "Auth" o "Timeout"
        dd("Error al enviar: " . $e->getMessage());
    }
    }
}