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
                        style="background-color: #6baedc; color: black; font-weight: bold; font-size: 1.2rem; border-radius: 0;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('que') }}"
                        style="color: black; font-size: 1.2rem;">¿Que es?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('historia') }}"
                        style="color: black; font-size: 1.2rem;">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('funciones') }}"
                        style="color: black; font-size: 1.2rem;">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('contactanos') }}"
                        style="color: black; font-size: 1.2rem;">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- cuerpo --}}
    <div class="container text-center mt-3 mb-3">
        <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="7000">
                    <img src="Images/ay.jpg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="Images/fak.jpg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="Images/temgpsueno.jpg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="bg-image d-flex flex-column justify-content-center align-items-center text-white mt-5 mb-5"
        style="background-image: url('Images/cua.png');
        background-size: cover; background-position: center; height: 100vh; position: relative;">

        <!-- Overlay gris -->
        <div class="overlay"
            style="background-color: rgba(71, 71, 71, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </div>

        <!-- Contenido encima del overlay -->
        <div class="content text-center mt-3 mb-5" style="position: relative; z-index: 1;">
            <h1 class="display-1">Conoce qué es el Internet de las cosas</h1>
            <p class="h1 mt-5">
                Es la interconexión de dispositivos físicos a través de internet, permitiéndoles recopilar, compartir y
                analizar datos en tiempo real.
            </p>
            <a href="#" class="btn btn-primary btn-lg mt-3"
                style="background-color: #6baedc; border-radius: 20px; font-size: 1.5rem; padding: 1rem 2rem;">
                Conoce más aquí
            </a>

        </div>
    </div>

    <div class="bg-image d-flex flex-column justify-content-center align-items-center text-white mt-5 mb-5"
        style="background-image: url('Images/1.png');
        background-size: cover; background-position: center; height: 100vh; position: relative;">

        <!-- Overlay gris -->
        <div class="overlay"
            style="background-color: rgba(71, 71, 71, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </div>

        <!-- Contenido encima del overlay -->
        <div class="content text-center mt-3 mb-5" style="position: relative; z-index: 1;">
            <h1 class="display-1">Historia del internet de las cosas</h1>
            <p class="h1 mt-5">
                Descubre como la tecnología cambio para poder
                darnos una mejor calidad de vida y los procesos que
                pasaron.
            </p>
            <a href="#" class="btn btn-primary btn-lg mt-3"
                style="background-color: #6baedc; border-radius: 20px; font-size: 1.5rem; padding: 1rem 2rem;">Conoce
                la historia</a>
        </div>
    </div>

    <div class="bg-image d-flex flex-column justify-content-center align-items-center text-white mt-5"
        style="background-image: url('Images/tri.png');
        background-size: cover; background-position: center; height: 100vh; position: relative;">

        <!-- Overlay gris -->
        <div class="overlay"
            style="background-color: rgba(71, 71, 71, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </div>

        <!-- Contenido encima del overlay -->
        <div class="content text-center mt-3" style="position: relative; z-index: 1;">
            <h1 class="display-1"> Descubre las posibilidades del IoT</h1>
            <p class="h1 mt-5">
                Saca el máximo potencial de la tecnología o solo
                aprende las cosas impresionantes que puedes hacer
                actualmente
            </p>
            <a href="#" class="btn btn-primary btn-lg mt-3"
                style="background-color: #6baedc; border-radius: 20px; font-size: 1.5rem; padding: 1rem 2rem;">
                Funciones del IoT</a>
        </div>
    </div>

</body>

</html>
