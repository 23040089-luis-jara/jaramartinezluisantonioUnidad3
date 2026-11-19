
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reporte validado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fa;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .resultado {
            background: white;
            max-width: 550px;
            width: 100%;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            border-top: 5px solid #198754;
            box-shadow: 0 5px 20px rgba(0,0,0,.12);
        }

        h2 {
            color: #003366;
        }

        .btn-inicio {
            background: #003366;
            color: white;
            padding: 11px 25px;
            text-decoration: none;
            border-radius: 6px;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-inicio:hover {
            background: #0784a3;
            color: white;
        }
    </style>
</head>

<body>

<div class="resultado">

    <h2>¡Reporte validado correctamente!</h2>

    <p class="text-success fw-bold">
        El estado del reporte ha sido actualizado.
    </p>

    <p>
        Número de computadora:
        <strong>{{ $reporte->numero_computadora }}</strong>
    </p>

    <p>
        Correo:
        <strong>{{ $reporte->correo }}</strong>
    </p>

    <p>
        Fecha de validación:
        <strong>
            {{ \Carbon\Carbon::parse($reporte->validado_at)->format('d/m/Y H:i') }}
        </strong>
    </p>

    <a href="{{ route('login') }}" class="btn-inicio">
        Ir al inicio
    </a>

</div>

</body>
</html>
