```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Computadoras, reportes, tecnología">
    <meta name="description" content="Sistema de reportes de fallas de computadoras">

    <title>Sistema de Reportes de Computadoras</title>

    <link rel="icon" href="{{ asset('images/Icon.jpg') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<div class="top-line"></div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/UAdeC.png') }}" alt="Logo">
            <span class="brand-text">
                Sistema de Reportes de Computadoras
            </span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav me-5">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        Iniciar Sesión
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">
                        Registrarse Ahora
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- CONTENIDO PRINCIPAL -->
<main class="contenido-principal">

    <!-- INTRODUCCIÓN -->
    <section class="introduccion">
        <h1>Importancia de las computadoras y la tecnología</h1>

        <p>
            Actualmente, las computadoras son herramientas fundamentales
            para realizar actividades escolares, laborales y personales.
            Mediante los sistemas operativos y diferentes programas es
            posible organizar información, realizar tareas y facilitar
            el trabajo diario. Por esta razón, es importante mantener
            los equipos en buenas condiciones y atender cualquier falla
            que pueda afectar su funcionamiento.
        </p>
    </section>

    <!-- PRIMERAS 3 TARJETAS -->
    <section class="tarjetas">

        <div class="card">
            <img src="{{ asset('images/computadora1.jpg') }}" class="card-img-top" alt="Computadora">
            <div class="card-body">
                <h5 class="card-title">Equipos de cómputo</h5>
                <p class="card-text">
                    Las computadoras permiten realizar diferentes
                    actividades mediante sus componentes físicos
                    y programas.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/computadora2.jpg') }}" class="card-img-top" alt="Sistema operativo">
            <div class="card-body">
                <h5 class="card-title">Sistemas operativos</h5>
                <p class="card-text">
                    Los sistemas operativos administran los recursos
                    de una computadora y permiten utilizar aplicaciones
                    como Windows y Linux.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/computadora3.jpg') }}" class="card-img-top" alt="Soporte técnico">
            <div class="card-body">
                <h5 class="card-title">Reportes de fallas</h5>
                <p class="card-text">
                    Registrar los problemas de los equipos ayuda a
                    identificar errores y facilitar su reparación
                    mediante soporte técnico.
                </p>
            </div>
        </div>

    </section>

    <!-- SEGUNDA INTRODUCCIÓN -->
    <section class="introduccion segunda-introduccion">

        <h2>Uso y mantenimiento de las computadoras</h2>

        <p>
            El uso adecuado de las computadoras ayuda a mejorar su
            rendimiento y prolongar su vida útil. Sin embargo,
            pueden presentarse problemas relacionados con el hardware,
            software o conexión a internet. Identificar estas fallas
            y reportarlas oportunamente permite darles seguimiento
            y encontrar una solución de manera organizada.
        </p>

    </section>

    <!-- SEGUNDAS 3 TARJETAS -->
    <section class="tarjetas">

        <div class="card">
            <img src="{{ asset('images/computadora4.jpg') }}" class="card-img-top" alt="Mantenimiento">
            <div class="card-body">
                <h5 class="card-title">Mantenimiento</h5>
                <p class="card-text">
                    Realizar mantenimiento preventivo permite
                    conservar los equipos en buenas condiciones
                    y evitar posibles problemas.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/computadora5.jpg') }}" class="card-img-top" alt="Problemas de computadora">
            <div class="card-body">
                <h5 class="card-title">Problemas técnicos</h5>
                <p class="card-text">
                    Las fallas pueden presentarse en componentes,
                    programas, conexiones o sistemas operativos,
                    afectando el funcionamiento del equipo.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/computadora6.jpg') }}" class="card-img-top" alt="Soporte técnico">
            <div class="card-body">
                <h5 class="card-title">Soporte técnico</h5>
                <p class="card-text">
                    El soporte técnico permite revisar los reportes,
                    identificar las causas de las fallas y realizar
                    las reparaciones necesarias.
                </p>
            </div>
        </div>

    </section>

</main>

<!-- FOOTER -->
<footer>

    <div class="footer-content">

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>Correo: soporte@computadoras.com</p>
            <p>Teléfono: 844-000-0000</p>
            <p>Atención a usuarios y soporte técnico</p>
        </div>

        <div class="footer-section">
            <h4>Servicios</h4>
            <p>Registro de fallas</p>
            <p>Seguimiento de reportes</p>
            <p>Atención de problemas técnicos</p>
        </div>

        <div class="footer-section">
            <h4>Información</h4>
            <p>Sistema de reportes de computadoras</p>
            <p>Administración de solicitudes</p>
            <p>Soluciones y mantenimiento de equipos</p>
        </div>

    </div>

    <div class="footer-bottom">
        Sistema de Reportes de Fallas de Computadoras © 2026
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```