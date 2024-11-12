<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .carousel-item img {
            max-width: 100%;
            max-height: 500px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #d4e2f3;">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active px-4 py-3" href="{{ route('index') }}"
                        style="color: black; font-size: 1.2rem; border-radius: 0;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('que') }}"
                        style="color: black; font-size: 1.2rem;">¿Qué es?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('historia') }}"
                        style=" color: black; font-size: 1.2rem;">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('funciones') }}" style="background-color: #6baedc; font-weight: bold; color: black; font-size: 1.2rem;">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('contactanos') }}"
                        style="color: black; font-size: 1.2rem;">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=" mb-5 text-center display-1 mt-2 font-weight-bold text-primary">
        <p> <strong> Funciones del internet de las cosas</strong></p>
    </div>

    <div class=" mb-5 text-center display-3 mt-2 font-weight-bold text-primary">
        <p>Monitoreo en tiempo real</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Los dispositivos IoT están equipados con sensores que permiten medir y monitorear variables del entorno, como temperatura, humedad, presión, movimiento, etc.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un sistema de seguridad que detecta movimiento en tiempo real y envía alertas a los usuarios.
            </li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p>Recopilación y análisis de datos</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Los dispositivos IoT recogen grandes cantidades de datos de forma continua, que pueden ser procesados y analizados para obtener información valiosa.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Sensores en fábricas recopilan datos sobre el rendimiento de las máquinas para detectar problemas antes de que ocurran fallas.
            </li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p>Automatización de procesos</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>IoT permite que los dispositivos ejecuten tareas de manera automática sin intervención humana, mejorando la eficiencia operativa.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un sistema de riego que se activa automáticamente cuando los sensores detectan que el suelo está seco.
            </li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p>Control remoto de dispositivos</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Los dispositivos IoT pueden ser controlados a distancia desde un teléfono, tablet o computadora conectada a internet.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Controlar la temperatura de una casa a través de un termostato inteligente mientras estás fuera de casa.
            </li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p> Comunicación entre dispositivos (M2M)</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>IoT permite la comunicación máquina a máquina (M2M), donde dispositivos intercambian información entre sí para trabajar de manera coordinada.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un coche autónomo que se comunica con los semáforos inteligentes para ajustar la velocidad según el tráfico.
            </li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p> Optimización de recursos</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>El IoT permite optimizar el uso de recursos como energía, agua o tiempo, a través del monitoreo y la automatización inteligente.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un sistema de iluminación inteligente que ajusta el brillo de las luces según la cantidad de luz natural en una habitación.</li>
        </ul>
    </div>  

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p> Mantenimiento predictivo</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Gracias a los datos recopilados, los sistemas IoT pueden predecir cuándo es probable que un equipo o máquina falle, permitiendo el mantenimiento predictivo.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Sensores en un motor que detectan patrones de vibración anormales y alertan a los técnicos antes de que ocurra una falla.</li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p> Mejora de la experiencia del usuario</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Los dispositivos IoT aprenden de las interacciones del usuario para personalizar la experiencia y ajustarse a sus preferencias.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un asistente virtual como Alexa o Google Home, que ajusta las luces o reproduce música basada en tus hábitos.</li>
        </ul>
    </div>

    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p>Localización y seguimiento</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>Los dispositivos IoT pueden rastrear y localizar objetos o personas, lo que es útil en áreas como logística o salud.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: Un reloj inteligente que monitoriza la ubicación de una persona y envía su posición en caso de emergencia.
            </ul>
    </div>
    <div class=" mb-5 text-center display-3 mt-5 font-weight-bold text-primary">
        <p>Interoperabilidad y conectividad</p>
    </div>
    <div class="text-center mt-2 fs-1 mx-5">
        <ul>
            <li>IoT permite que múltiples dispositivos y plataformas trabajen juntos, intercambiando datos y creando un ecosistema conectado.
            </li>
        </ul>
        <ul>
            <li>Ejemplo: En una ciudad inteligente, sensores de tráfico, sistemas de iluminación y transporte público trabajan coordinados para mejorar la movilidad y reducir la congestión.   </ul>
    </div>


    <div class="d-flex flex-column justify-content-center align-items-center text-primary mt-5"
    style="background-size: cover; background-position: center; height: 100vh; position: relative;">

    <!-- Overlay gris -->
    <div class="overlay"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
    </div>

    <!-- Contenido encima del overlay -->
    <div class="content text-center mt-3" style="position: relative; z-index: 1;">
        <!-- Texto centrado encima del video -->
        <p class="text-center text-primary display-2"><strong>Video de ejemplo: </strong></p>

        <!-- Video de YouTube centrado -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jqzwosf6D0k"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="max-width: 80%; max-height: 80%; border: none;"></iframe>
    </div>
</div>
</body>

</html>