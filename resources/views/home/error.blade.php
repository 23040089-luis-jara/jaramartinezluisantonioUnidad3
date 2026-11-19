<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Error 404 - Facultad Medicina UAdeC</title>

    <!-- Favicon -->
    <link rel="icon" href="../images/Icon.jpg" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>



<!-- CONTENIDO -->
<div class="container">

    <div class="form-section text-center">

        <h1 class="text-danger display-3">
            404
        </h1>

        <h2 class="text-primary">
            Página no encontrada
        </h2>

        <p>
            Lo sentimos, la página que intentas visitar no existe,
            fue eliminada o no está disponible temporalmente.
        </p>

        <p>
            Puedes regresar al sitio principal para continuar navegando.
        </p>

        <br>

        <a href="{{ route('inicio.web') }}"
           class="btn btn-primary">
            Regresar al sitio principal
        </a>

    </div>

</div>

</body>
</html>