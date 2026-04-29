<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Cita - Lovely Dress</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0; color: #333; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; border: 1px solid #eee; border-radius: 8px; overflow: hidden; }
        .header { background-color: #1a1a1a; color: #d4af37; padding: 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 24px; letter-spacing: 3px; text-transform: uppercase; }
        .content { padding: 40px; line-height: 1.6; }
        .content h2 { color: #1a1a1a; font-size: 18px; border-bottom: 1px solid #d4af37; padding-bottom: 10px; margin-top: 0; }
        .field-group { margin-bottom: 15px; }
        .label { font-weight: bold; color: #d4af37; text-transform: uppercase; font-size: 12px; display: block; }
        .value { font-size: 16px; color: #444; }
        .footer { background-color: #f4f4f4; padding: 20px; text-align: center; font-size: 12px; color: #888; }
        .accent { color: #d4af37; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Lovely Dress</h1>
            <p style="margin: 5px 0 0; font-size: 12px;">Solicitud de Cita Exclusiva</p>
        </div>
        
        <div class="content">
            <h2>Detalles de la Solicitud</h2>
            
            <div class="field-group">
                <span class="label">Nombre Completo:</span>
                <span class="value">{{ $data['nombre'] }} {{ $data['apellido'] }}</span>
            </div>

            <div class="field-group">
                <span class="label">Correo Electrónico:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>

            <div class="field-group">
                <span class="label">Teléfono de Contacto:</span>
                <span class="value">{{ $data['telefono'] }}</span>
            </div>

            <div class="field-group">
                <span class="label">Ciudad:</span>
                <span class="value">{{ $data['ciudad'] }}</span>
            </div>

            <p style="margin-top: 30px; font-style: italic; color: #666;">
                Este correo fue enviado desde el formulario de contacto oficial de <span class="accent">Lovely Dress</span>.
            </p>
        </div>
        
        <div class="footer">
            &copy; {{ date('Y') }} Lovely Dress. Todos los derechos reservados.<br>
            Mérida, Yucatán, México.
        </div>
    </div>
</body>
</html>