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
                        style=" color: black; font-size: 1.2rem; border-radius: 0;">Inicio</a>
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
                    <a class="nav-link px-4 py-3" href="{{ route('contactanos') }}"
                        style="background-color: #6baedc; font-weight: bold; color: black; font-size: 1.2rem;">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=" mb-5 text-center display-1 mt-2 font-weight-bold text-primary">
        <p> <strong> Contactanos </strong></p>
    </div>

    <div class=" mb-5 text-center display-3 mt-2 font-weight-bold text-primary">
        <p>¿Tienes alguna pregunta o comentario? 
        <br> ¡Déjanos saber!</p>
    </div>
    

    {{-- FORMULARIO --}}
      <form>
        <div class="form-floating mb-4 fs-4">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            <label for="floatingNombre">Nombre</label>
        </div>

        <div class="form-floating mb-4 fs-4">
            <input type="email" class="form-control" id="email" placeholder=" Email">
            <label for="floatingInput"> Correo electrónico</label>
          </div>

        <div class="form-floating mb-4 fs-4">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
            <label for="floatingNombre">Telefono</label>
        </div>

        <div class="form-floating mb-4 fs-4">
            <textarea class="form-control" placeholder="Deja tu comentario aqui" id="mensaje"></textarea>
            <label for="Mensaje">Mensaje</label>
          </div>

        <button type="submit" class="btn btn-primary"> Enviar</button>
      </form>

</body>
</html>
