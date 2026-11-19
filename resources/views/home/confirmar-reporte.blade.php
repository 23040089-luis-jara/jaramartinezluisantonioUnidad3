
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confirmar reporte</title>

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

        .confirmacion {
            background: white;
            max-width: 550px;
            width: 100%;
            padding: 35px;
            border-radius: 12px;
            border-top: 5px solid #BF9B4C;
            box-shadow: 0 5px 20px rgba(0,0,0,.12);
            text-align: center;
        }

        h2 {
            color: #003366;
            margin-bottom: 20px;
        }

        .btn-validar {
            background: #198754;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn-validar:hover {
            background: #146c43;
            color: white;
        }

        .dato {
            text-align: left;
            background: #f4f7fa;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>

<div class="confirmacion">

    <h2>Confirmación de reporte</h2>

    <p>
        Se ha solicitado validar el siguiente reporte de falla.
        Revisa los datos antes de continuar.
    </p>

    <div class="dato">
        <strong>Número de computadora:</strong><br>
        {{ $reporte->numero_computadora }}
    </div>

    <div class="dato">
        <strong>Causa:</strong><br>
        {{ $reporte->causa }}
    </div>

    <div class="dato">
        <strong>Correo:</strong><br>
        {{ $reporte->correo }}
    </div>

    @if($reporte->estado === 'Validado')

        <div class="alert alert-success">
            Este reporte ya fue validado.
        </div>

    @else

        <form method="POST" action="{{ url()->full() }}">
            @csrf

            <button type="submit" class="btn-validar">
                Validar reporte
            </button>
        </form>

    @endif

</div>

</body>
</html>
