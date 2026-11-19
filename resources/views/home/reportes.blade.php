
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar reporte | Comité de Ética en Investigación</title>

    <link rel="icon" href="{{ asset('images/Icon.jpg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reportes.css') }}">
</head>

<body>

<div class="top-line"></div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('session') }}">
            <img src="{{ asset('images/UAdeC.png') }}">
            <span class="brand-text">Comité de Ética en Investigación</span>

            <span class="brand-text ms-3">
                {{ session('nombre') }} | {{ session('matricula') }}
            </span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav me-5">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('session') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('reportes.index') }}">
                        Registrar reporte
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="nav-link border-0 bg-transparent">
                            Cerrar Sesión
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- CONTENIDO -->
<main class="container contenido-reportes">

    <h2 class="text-center titulo-reportes">
        Registro de fallas de computadoras
    </h2>

    <p class="text-center descripcion-reportes">
        Registra los problemas que presente el equipo de cómputo
        para que puedan ser revisados.
    </p>

    <!-- MENSAJES -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- FORMULARIO -->
    <div class="card shadow formulario-reporte">

        <div class="card-header">
            <h4>Nuevo reporte</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('reportes.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="numero_computadora" class="form-label">
                        Número de computadora
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="numero_computadora"
                        name="numero_computadora"
                        placeholder="Ejemplo: PC-015"
                        value="{{ old('numero_computadora') }}"
                        maxlength="50"
                        required>
                </div>

                <div class="mb-4">
                    <label for="causa" class="form-label">
                        Causa de la falla
                    </label>

                    <textarea
                        class="form-control"
                        id="causa"
                        name="causa"
                        rows="5"
                        maxlength="2000"
                        placeholder="Describe el problema que presenta la computadora..."
                        required>{{ old('causa') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="correo" class="form-label">
                        Correo del usuario
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        id="correo"
                        value="{{ session('email') }}"
                        readonly>

                    <small class="text-muted">
                        El correo se obtiene automáticamente de tu sesión.
                    </small>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-registrar">
                        Registrar reporte
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- HISTORIAL -->
    <h3 class="titulo-historial">
        Mis reportes registrados
    </h3>

    <div class="table-responsive tabla-reportes">

        <table class="table table-hover align-middle">

            <thead>
                <tr>
                    <th>Número</th>
                    <th>Causa</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody>

                @forelse($reportes as $reporte)

                    <tr>
                        <td>{{ $reporte->numero_computadora }}</td>

                        <td>{{ $reporte->causa }}</td>

                        <td>{{ $reporte->correo }}</td>

                        <td>
                            @if($reporte->estado === 'Validado')
                                <span class="badge bg-success">
                                    Validado
                                </span>
                            @else
                                <span class="badge bg-warning text-dark">
                                    Pendiente
                                </span>
                            @endif
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($reporte->created_at)->format('d/m/Y H:i') }}
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            Todavía no tienes reportes registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>
        </table>
    </div>

</main>

<!-- FOOTER -->
<footer>
    <div class="footer-content">

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>WhatsApp: 844-000-0000</p>
            <p>Correo electrónico: contacto@uadec.edu.mx</p>
            <p>Teléfono: 844-412-0000</p>
        </div>

        <div class="footer-section">
            <h4>Dirección</h4>
            <p>Facultad de Medicina, Campus Saltillo</p>
            <p>Universidad Autónoma de Coahuila</p>
            <p>Blvd. Venustiano Carranza S/N, Saltillo, Coahuila</p>
        </div>

        <div class="footer-section">
            <h4>Atención a derechos</h4>
            <p>Teléfonos: 844-000-0000</p>
            <p>Horario: Lunes a viernes de 9:00 a 17:00 h</p>
            <p>Correo: derechos@uadec.edu.mx</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            &copy; 2026 Universidad Autónoma de Coahuila -
            Facultad de Medicina, Campus Saltillo.
            Todos los derechos reservados.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
