<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar Sesión - Reportes de Computadoras</title>

    <link rel="icon" href="{{ asset('images/Icon.jpg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

<div class="top-line"></div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('inicio.web') }}">
            <img src="{{ asset('images/UAdeC.png') }}" alt="Logo">
            <span class="brand-text">
                Sistema de Reportes de Computadoras
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
                    <a class="nav-link" href="{{ route('registro') }}">
                        Registrarse Ahora
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio.web') }}">
                        Regresar al sitio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"
                       data-bs-toggle="modal"
                       data-bs-target="#chatModal">
                        Asistente
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- ASISTENTE VIRTUAL -->
<div class="modal fade" id="chatModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Asistente Virtual</h5>

                <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div id="chatBox"></div>

                <input type="text" id="mensaje"
                       class="form-control mt-3"
                       placeholder="Escribe tu pregunta">

            </div>

            <div class="modal-footer">

                <button class="btn btn-primary"
                        onclick="enviarMensaje()">
                    Enviar
                </button>

            </div>

        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<main class="login-container">

    <div class="form-section">

        <div class="login-icon">
            <span>💻</span>
        </div>

        <h2>¡Bienvenido!</h2>

        <h4>Iniciar Sesión</h4>

        <p class="descripcion">
            Ingresa a nuestro sistema para registrar y consultar
            reportes de fallas en equipos de cómputo. Podrás dar
            seguimiento a los problemas y conocer el estado de
            las solicitudes realizadas.
        </p>

        <form method="POST" action="{{ route('login.validar') }}">

            @csrf

            <label for="email">Correo electrónico</label>

            <input type="email"
                   id="email"
                   class="form-control"
                   name="email"
                   placeholder="Ingresa tu correo electrónico"
                   value="{{ old('email') }}"
                   required>

            <label for="password">Contraseña</label>

            <input type="password"
                   id="password"
                   class="form-control"
                   name="password"
                   placeholder="Ingresa tu contraseña"
                   required>

            <button type="submit" class="btn btn-primary btn-login">
                Ingresar
            </button>

            <div class="mt-3 text-center">

                <a href="{{ route('password.reset') }}">
                    ¿Olvidaste tu contraseña?
                </a>

            </div>

            <div class="registro-link">
                ¿No tienes una cuenta?
                <a href="{{ route('registro') }}">Regístrate aquí</a>
            </div>

        </form>

    </div>

</main>

<!-- FOOTER -->
<footer>

    <div class="footer-content">

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>Correo: soporte@computadoras.com</p>
            <p>Teléfono: 844-000-0000</p>
            <p>Atención y soporte técnico</p>
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
            <p>Mantenimiento de equipos</p>
        </div>

    </div>

    <div class="footer-bottom">
        Sistema de Reportes de Fallas de Computadoras © 2026
    </div>

</footer>

<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: "toast-top-right",
    timeOut: 3000
};

// CORREO EN MINÚSCULAS
document.getElementById('email').addEventListener('input', function () {
    this.value = this.value.toLowerCase().replace(/\s/g, '');
});

// MENSAJES
if(session('error'))
    toastr.error(json(session('error')));
endif

if(session('success'))
    toastr.success(json(session('success')));
endif

// ASISTENTE VIRTUAL
function enviarMensaje() {

    let mensaje = document.getElementById('mensaje').value.trim();

    if (!mensaje) return;

    let chat = document.getElementById('chatBox');

    let usuario = document.createElement('p');
    usuario.textContent = 'Tú: ' + mensaje;
    chat.appendChild(usuario);

    fetch('/chatbot', {

        method: 'POST',

        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },

        body: JSON.stringify({
            mensaje: mensaje
        })

    })
    .then(response => response.json())
    .then(data => {

        let respuesta = document.createElement('p');
        respuesta.textContent = 'Bot: ' + data.respuesta;
        chat.appendChild(respuesta);

        chat.scrollTop = chat.scrollHeight;

    })
    .catch(() => {
        let error = document.createElement('p');
        error.textContent = 'No fue posible conectar con el asistente.';
        chat.appendChild(error);
    });

    document.getElementById('mensaje').value = '';
}

</script>

</body>
</html>