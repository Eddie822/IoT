<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .carousel-item img {
            max-width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        .form-container {
            padding: 2rem;
            background-color: #f7f9fb;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            font-size: 1rem;
            width: 500px;
        }

        .display-title {
            font-weight: bold;
            color: #2a5f9e;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #d4e2f3;">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active px-4 py-3" href="{{ route('index') }}" style="color: black; font-size: 1.2rem;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('que') }}" style="color: black; font-size: 1.2rem;">¿Qué es?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('historia') }}" style="color: black; font-size: 1.2rem;">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('funciones') }}" style="color: black; font-size: 1.2rem;">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-3" href="{{ route('contactanos') }}" style="background-color: #6baedc; font-weight: bold; color: black; font-size: 1.2rem;">Contáctanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center my-5">
        <h1 class="display-title display-1 mb-3">Contáctanos</h1>
        <p class="display-title display-4">¿Tienes alguna pregunta o comentario? <br> ¡Déjanos saber!</p>
    </div>

    <div class="container d-flex justify-content-center">
        @if(session('success'))
            <div class="alert alert-success w-50">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger w-50">
                {{ session('error') }}
            </div>
        @endif
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- FORMULARIO --}}
    <div class="container d-flex justify-content-center">
        <div class="form-container">
            <form action="{{ route('contacto.store') }}" method="POST">
                @csrf 
                <div class="form-floating mb-4 fs-7">
                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Nombre" required>
                    <label for="nombre">Nombre</label>
                </div>

                <div class="form-floating mb-4 fs-6">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Correo electrónico" required>
                    <label for="email">Correo electrónico</label>
                </div>

                <div class="form-floating mb-4 fs-6">
                    <input type="text" class="form-control form-control-lg" id="telefono" name="telefono" placeholder="Teléfono" required>
                    <label for="telefono">Teléfono</label>
                </div>

                <div class="form-floating mb-4 fs-6">
                    <textarea class="form-control form-control-lg" placeholder="Deja tu comentario aquí" id="mensaje" name="mensaje" style="height: 200px;" required></textarea>
                    <label for="mensaje">Mensaje</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    @if($latestEntry)
    <div class="container mt-5">
        <h4>Última persona que nos contactó:</h4>
        <p><strong>Nombre:</strong> {{ $latestEntry->nombre }}</p>
        <p><strong>Fecha de envío:</strong> {{ \Carbon\Carbon::parse($latestEntry->created_at)->diffForHumans() }}</p>
    </div>
    @endif


</body>
</html>
