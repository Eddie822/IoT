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
                        style="background-color: #6baedc; font-weight: bold; color: black; font-size: 1.2rem;">¿Que es?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('historia') }}" style="color: black; font-size: 1.2rem;">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('funciones') }}" style="color: black; font-size: 1.2rem;">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('contactanos') }}"
                        style="color: black; font-size: 1.2rem;">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=" mb-5 text-center display-1 mt-2 font-weight-bold text-primary">
        <p> <strong>¿Que es el internet de las cosas?</strong></p>
    </div>

    <div class="text-center mt-2 fs-1 mx-5">
        <p>El Internet de las Cosas (IoT, por sus siglas en inglés) es una red
            de dispositivos físicos conectados entre sí a través de internet,
            que pueden recopilar, enviar y recibir datos. Estos dispositivos
            incluyen desde objetos cotidianos como electrodomésticos,
            relojes inteligentes y termostatos, hasta sistemas más
            complejos como sensores industriales, cámaras de seguridad y
            vehículos.
           </p>
    </div>

    <div class="text-center border-3 mt-5 mb-12 border-black w-100 h-auto" >
        <img class="border border-5 border-black" src="images/dob.png" style="width: 700px; height: 400px">

    </div>

    <div class="text-center mt-5 fs-1 mx-5">
        <p> Cada dispositivo está equipado con sensores, software y otras
            tecnologías que les permiten comunicarse con otros sistemas o
            dispositivos sin la necesidad de intervención humana.
            El IoT permite automatizar procesos, optimizar recursos y mejorar la
            toma de decisiones en tiempo real, al permitir que los dispositivos
            compartan información entre sí y se controlen de forma remota.
           </p>
    </div>

</body>

</html>
