
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Sistema de Reportes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>

<div class="top-line"></div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio.web') }}">
            <img src="{{ asset('images/UAdeC.png') }}" alt="Logo">
            <span class="brand-text">Sistema de Reportes de Computadoras</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio.web') }}">Regresar al sitio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal"
                       data-bs-target="#chatModal">Asistente</a>
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
                <input type="text" id="mensaje" class="form-control mt-3"
                       placeholder="Escribe tu pregunta">
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" onclick="enviarMensaje()">
                    Enviar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- FORMULARIO -->
<main class="registro-section">
    <div class="container">
        <h1 class="text-center mb-2">Crear una cuenta</h1>

        <p class="descripcion text-center mb-4">
            Regístrate para ingresar al sistema, reportar fallas en equipos
            de cómputo y consultar el seguimiento de tus reportes.
        </p>

        <div class="formulario">
            <form id="registerForm" action="{{ route('registro.guardar') }}"
                  method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre"
                           class="form-control"
                           placeholder="Escribe tu nombre completo"
                           value="{{ old('nombre') }}" required>
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="profesion">Profesión o especialidad:</label>
                    <input type="text" id="matricula" name="matricula"
                           class="form-control"
                           placeholder="Ej. Estudiante de informática"
                           value="{{ old('profesion') }}" required>
                    @error('profesion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono"
                           class="form-control"
                           placeholder="844 000 0000"
                           value="{{ old('telefono') }}" maxlength="12" required>
                    @error('telefono')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email"
                           class="form-control"
                           placeholder="correo@ejemplo.com"
                           value="{{ old('email') }}" required>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password1">Contraseña:</label>
                    <div class="password-container">
                        <input type="password" id="password1" name="password1"
                               class="form-control password-input"
                               placeholder="Mínimo 8 caracteres" required>
                        <span class="toggle-password"
                              onclick="togglePassword('password1', this)">👁️</span>
                    </div>
                    @error('password1')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password2">Confirmar contraseña:</label>
                    <div class="password-container">
                        <input type="password" id="password2" name="password2"
                               class="form-control password-input"
                               placeholder="Confirma tu contraseña" required>
                        <span class="toggle-password"
                              onclick="togglePassword('password2', this)">👁️</span>
                    </div>
                </div>

                <button type="submit" class="boton w-100">Registrarme</button>

                <p class="text-center mt-3 mb-0">
                    ¿Ya tienes una cuenta?
                    <a href="{{ route('login') }}">Inicia sesión</a>
                </p>
            </form>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h4>Contacto</h4>
            <p>WhatsApp: 844-000-0000</p>
            <p>Correo: soporte@reportescomputadoras.com</p>
            <p>Teléfono: 844-412-0000</p>
        </div>

        <div class="footer-section">
            <h4>Servicios</h4>
            <p>Registro de usuarios</p>
            <p>Reportes de fallas</p>
            <p>Seguimiento de reportes</p>
        </div>

        <div class="footer-section">
            <h4>Información</h4>
            <p>Sistema de Reportes de Computadoras</p>
            <p>Atención a problemas de equipos de cómputo</p>
            <p>Horario: Lunes a viernes de 9:00 a 17:00 h</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 Sistema de Reportes de Computadoras. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Mostrar u ocultar contraseña
    function togglePassword(id, icon) {
        const input = document.getElementById(id);

        if (input.type === 'password') {
            input.type = 'text';
            icon.textContent = '🙈';
        } else {
            input.type = 'password';
            icon.textContent = '👁️';
        }
    }

    // Validaciones antes de enviar
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        const password1 = document.getElementById('password1').value;
        const password2 = document.getElementById('password2').value;

        if (password1.length < 8) {
            event.preventDefault();
            alert('La contraseña debe tener al menos 8 caracteres.');
            return;
        }

        if (password1 !== password2) {
            event.preventDefault();
            alert('Las contraseñas no coinciden.');
        }
    });

    // Nombre con letras y espacios
    document.getElementById('nombre').addEventListener('input', function() {
        this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
    });

    // Teléfono: solo números, máximo 10 dígitos
    document.getElementById('telefono').addEventListener('input', function() {
        let numeros = this.value.replace(/\D/g, '').substring(0, 10);

        if (numeros.length > 6) {
            this.value = numeros.substring(0, 3) + ' ' +
                         numeros.substring(3, 6) + ' ' +
                         numeros.substring(6);
        } else if (numeros.length > 3) {
            this.value = numeros.substring(0, 3) + ' ' + numeros.substring(3);
        } else {
            this.value = numeros;
        }
    });

    // Correo en minúsculas
    document.getElementById('email').addEventListener('input', function() {
        this.value = this.value.toLowerCase();
    });

    // Asistente virtual
    function enviarMensaje() {
        const input = document.getElementById('mensaje');
        const mensaje = input.value.trim();

        if (!mensaje) return;

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ mensaje: mensaje })
        })
        .then(response => response.json())
        .then(data => {
            const chat = document.getElementById('chatBox');

            const usuario = document.createElement('p');
            usuario.textContent = 'Tú: ' + mensaje;
            chat.appendChild(usuario);

            const bot = document.createElement('p');
            bot.textContent = 'Asistente: ' + data.respuesta;
            chat.appendChild(bot);

            input.value = '';
            chat.scrollTop = chat.scrollHeight;
        })
        .catch(() => alert('No se pudo conectar con el asistente.'));
    }
</script>

</body>
</html>
