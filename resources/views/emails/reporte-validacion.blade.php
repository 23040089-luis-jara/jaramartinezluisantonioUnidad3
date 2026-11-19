
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de reporte</title>
</head>

<body style="margin:0; padding:30px; background-color:#f4f7fa; font-family:Arial,sans-serif;">

    <div style="max-width:600px; margin:auto; background:white; border-radius:10px; overflow:hidden;">

        <div style="background:linear-gradient(90deg,#0784a3,#003366); padding:25px; text-align:center; border-bottom:5px solid #BF9B4C;">
            <h2 style="color:white; margin:0;">
                Comité de Ética en Investigación
            </h2>
        </div>

        <div style="padding:30px; color:#333;">

            <h3 style="color:#003366;">
                Registro de reporte de falla
            </h3>

            <p>Hola,</p>

            <p>
                Se ha registrado un reporte de falla de computadora
                utilizando tu correo electrónico.
            </p>

            <p><strong>Número de computadora:</strong>
                {{ $reporte->numero_computadora }}
            </p>

            <p><strong>Causa de la falla:</strong>
                {{ $reporte->causa }}
            </p>

            <p><strong>Correo registrado:</strong>
                {{ $reporte->correo }}
            </p>

            <p>
                Si reconoces este reporte y deseas confirmar su registro,
                presiona el siguiente botón:
            </p>

            <div style="text-align:center; margin:30px 0;">

                <a href="{{ $url }}"
                   style="background-color:#198754;
                          color:white;
                          text-decoration:none;
                          padding:15px 30px;
                          border-radius:6px;
                          font-weight:bold;
                          display:inline-block;">
                    Validar reporte
                </a>

            </div>

            <p style="font-size:13px; color:#777;">
                Este enlace estará disponible durante 48 horas.
                Si no reconoces este reporte, puedes ignorar este correo.
            </p>

        </div>

        <div style="background:#003366; padding:15px; text-align:center;">
            <p style="color:white; font-size:12px; margin:0;">
                Universidad Autónoma de Coahuila - Facultad de Medicina
            </p>
        </div>

    </div>

</body>
</html>
