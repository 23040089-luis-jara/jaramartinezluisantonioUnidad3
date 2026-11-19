<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Facultad Medicina U A de C</title>
    <!-- Favicon -->
    <link rel="icon" href="../images/Icon.jpg" type="image/png">
    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>

<!-- Navbar -->
<div class="top-line"></div>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/UAdeC.png" alt="Logo Universidad Autónoma de Coahuila"><span class="brand-text">Comité de Ética en Investigación</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-5"><!--class="navbar-nav ms-auto"-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">Registrarse Ahora</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio.web') }}">¡Regresar al sitio!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#chatModal">

                    Asistente
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<div class="modal fade"
     id="chatModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Asistente Virtual
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div id="chatBox"
                     style="height:300px;
                            overflow-y:auto;
                            border:1px solid #ddd;
                            padding:10px;">
                </div>

                <input type="text"
                       id="mensaje"
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

<div class="container">

    <div class="info-section">
        <img src="{{ asset('images/Inicio.png') }}">
    </div>

    <div class="form-section">

        <h2 class="text-primary">
            ¡Recuperar Contraseña!
        </h2>

        <p>
            Ingresa el código recibido en tu correo y establece una nueva contraseña.
        </p>

        <form method="POST"
              action="#">

            @csrf

            <input type="text"
                   class="form-control"
                   name="codigo"
                   placeholder="Código de recuperación"
                   required>

            <br>

            <input type="password"
                   class="form-control"
                   name="password"
                   placeholder="Nueva contraseña"
                   required>

            <br>

            <input type="password"
                   class="form-control"
                   name="password_confirmation"
                   placeholder="Confirmar contraseña"
                   required>

            <br>

            <button type="submit"
                    class="btn btn-primary">
                Actualizar Contraseña
            </button>

            <div class="mt-3">

                <a href="{{ route('login') }}">
                    Regresar al inicio de sesión
                </a>

            </div>

        </form>

    </div>

</div>
<!-- CONTENIDO -->
</form>
    </div>
</div> 

<!-- Contenido -->

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
            <p>&copy; 2026 Universidad Autónoma de Coahuila - Facultad de Medicina, Campus Saltillo. Todos los derechos reservados.</p>
        </div>
    </footer>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
    "closeButton": true, 
    "progressBar": true, 
    "positionClass": "toast-top-right", 
    "timeOut": "3000", 
    "extendedTimeOut": "1000", 
    "showMethod": "fadeIn", 
    "hideMethod": "fadeOut" 
};
</script>

<script>
document.getElementById('email').addEventListener('input', function () {
    this.value = this.value.toLowerCase();
});
document.getElementById('email').addEventListener('input', function () {
    this.value = this.value.toLowerCase().replace(/\s/g,'');
});
</script>

@if(session('error'))
<script>
toastr.error("{{ session('error') }}");
</script>
@endif

<script>

function enviarMensaje()
{
    let mensaje =
        document.getElementById('mensaje').value;

    fetch('/chatbot',{

        method:'POST',

        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN':
            '{{ csrf_token() }}'
        },

        body:JSON.stringify({
            mensaje:mensaje
        })

    })
    .then(response=>response.json())
    .then(data=>{

        let chat =
            document.getElementById('chatBox');

        chat.innerHTML +=
        '<p><b>Tú:</b> '+mensaje+'</p>';

        chat.innerHTML +=
        '<p><b>Bot:</b> '
        +data.respuesta+
        '</p>';

        document.getElementById('mensaje').value='';
    });
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>