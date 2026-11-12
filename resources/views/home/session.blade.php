<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Página Facultad Medicina U A de C</title>
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
let tiempoInactividad = 600000; // 10 minutos en ms

let timer = setTimeout(() => {
    window.location.href = "logout.php";
}, tiempoInactividad);

// Reinicia el timer si el usuario mueve el mouse o presiona una tecla
document.onmousemove = document.onkeypress = () => {
    clearTimeout(timer);
    timer = setTimeout(() => {
        window.location.href = "logout.php";
    }, tiempoInactividad);
};
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
                <li class="nav-item"><a class="nav-link" href="misdoc.php">Mis Enviados</a></li>
                <li class="nav-item"><a class="nav-link" href="enviarpdf.php">¡Enviar Formato!</a></li>
                <li class="nav-item"><form method="POST"
                                        action="{{ route('logout') }}">

                                        @csrf

                                        <button
                                            type="submit"
                                            class="nav-link border-0 bg-transparent">

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

        <!-- Hepatitis A -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        Hepatitis A
                    </h5>

                    <p class="card-text">
                        La hepatitis A es una enfermedad infecciosa causada por el virus
                        de la hepatitis A, el cual afecta directamente al hígado. Se
                        transmite principalmente por el consumo de alimentos o agua
                        contaminados, así como por el contacto cercano con personas
                        infectadas. Esta enfermedad provoca inflamación hepática y puede
                        dificultar que el organismo elimine adecuadamente toxinas y procese
                        nutrientes esenciales.
                    </p>

                    <p class="card-text">
                        Entre los síntomas más frecuentes se encuentran la fatiga,
                        fiebre, pérdida del apetito, náuseas, dolor abdominal e ictericia,
                        que provoca una coloración amarillenta en la piel y los ojos.
                        Aunque la mayoría de las personas se recuperan completamente,
                        algunos pacientes pueden presentar complicaciones graves,
                        especialmente si tienen enfermedades hepáticas previas.
                    </p>
                </div>
            </div>
        </div>

        <!-- Hepatitis B -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        Hepatitis B
                    </h5>

                    <p class="card-text">
                        La hepatitis B es una infección viral que se transmite mediante
                        sangre, fluidos corporales, relaciones sexuales sin protección o
                        de madre a hijo durante el parto. El virus ataca las células del
                        hígado, generando inflamación y afectando funciones esenciales
                        como la producción de proteínas, el almacenamiento de energía y
                        la eliminación de sustancias tóxicas.
                    </p>

                    <p class="card-text">
                        Esta enfermedad puede presentarse de forma aguda o convertirse en
                        una infección crónica. Cuando permanece durante años en el
                        organismo, aumenta el riesgo de desarrollar cirrosis, insuficiencia
                        hepática y cáncer de hígado. Los síntomas más comunes incluyen
                        cansancio extremo, fiebre, dolor articular, náuseas, pérdida del
                        apetito e ictericia, aunque algunas personas pueden no presentar
                        síntomas durante largos periodos.
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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