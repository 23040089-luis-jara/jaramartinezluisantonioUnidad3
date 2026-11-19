<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Reporte de Computadoras U A de C</title>
    <!-- Favicon -->
    <link rel="icon" href="../images/Icon.jpg" type="image/png">
    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if (session('login_success'))
<script>
    $(document).ready(function () {
        toastr.success("Sesión iniciada correctamente", "Bienvenido");
    });
</script>
@endif

<script>
let tiempoInactividad = 600000;

let timer = setTimeout(cerrarSesion, tiempoInactividad);

function reiniciarTimer() {
    clearTimeout(timer);
    timer = setTimeout(cerrarSesion, tiempoInactividad);
}

function cerrarSesion() {
    document.getElementById('logoutForm').submit();
}

document.onmousemove = reiniciarTimer;
document.onkeypress = reiniciarTimer;
document.onclick = reiniciarTimer;
document.onscroll = reiniciarTimer;
</script>

</head>
<body>

<!-- Navbar -->
<div class="top-line"></div>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/UAdeC.png') }}">
        <span class="brand-text">Comité de Ética en Investigación</span>
        <span class="brand-text ms-3">
    {{ session('nombre') }}
    |
    {{ session('matricula') }}
</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-5"><!--class="navbar-nav ms-auto"-->
                <li class="nav-item">
                    <a class="nav-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#chatModal">

                    Asistente
                    </a>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="{{ route('reportes.index') }}">
        Registro de Reportes
    </a>
</li>
                <li class="nav-item"><a class="nav-link" href="enviarpdf.php">¡Enviar Formato!</a></li>
                <li class="nav-item"><form id="logoutForm" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="nav-link border-0 bg-transparent">
                                            Cerrar Sesión
                                        </button>
                                    </form></li>
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

<!-- CONTENIDO -->

<h2 class="text-center mb-4 titulo-formatos">
    ¡Lista de Formatos!
</h2>


<div class="container mt-4">
    <div class="row">

<!-- Fallas de Hardware -->
<div class="col-md-6 mb-4">
    <div class="card shadow h-100">
        <div class="card-body">
            <h5 class="card-title">
                Fallas de Hardware
            </h5>

            <p class="card-text">
                Las fallas de hardware son problemas que se presentan en los
                componentes físicos de una computadora, como el disco duro,
                memoria RAM, procesador, tarjeta madre, fuente de alimentación
                y dispositivos periféricos. Estas fallas pueden originarse
                por el desgaste de los componentes, sobrecalentamiento,
                acumulación de polvo, golpes o conexiones incorrectas.
            </p>

            <p class="card-text">
                Entre los problemas más frecuentes se encuentran que la
                computadora no encienda, que se reinicie inesperadamente,
                que presente pantallas azules, ruidos extraños o que no
                reconozca algunos dispositivos. Para solucionarlos es
                necesario realizar una revisión física, comprobar las
                conexiones y, cuando sea necesario, reemplazar el componente
                dañado para recuperar el funcionamiento del equipo.
            </p>
        </div>
    </div>
</div>

<!-- Fallas de Software -->
<div class="col-md-6 mb-4">
    <div class="card shadow h-100">
        <div class="card-body">
            <h5 class="card-title">
                Fallas de Software
            </h5>

            <p class="card-text">
                Las fallas de software son errores relacionados con los
                programas, sistemas operativos y aplicaciones instaladas
                en una computadora. Pueden producirse por archivos dañados,
                instalaciones incorrectas, incompatibilidad entre programas,
                virus informáticos o actualizaciones incompletas. Estos
                problemas afectan el funcionamiento del equipo sin que
                necesariamente exista un daño en sus componentes físicos.
            </p>

            <p class="card-text">
                Algunos de los síntomas más comunes son que los programas
                dejen de responder, que el sistema operativo tarde demasiado
                en iniciar, que aparezcan mensajes de error, cierres
                inesperados o dificultades para conectarse a internet.
                Para solucionar estas fallas se pueden actualizar los
                programas, analizar el equipo con un antivirus, reparar
                archivos del sistema o reinstalar las aplicaciones que
                presenten problemas.
            </p>
        </div>
    </div>
</div>

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

    <!-- Bootstrap JS -->
    
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