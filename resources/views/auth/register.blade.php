<!DOCTYPE html>
<html>
<head>
    <title>Login FARMACIA FLORES</title>
    <!-- Made with love by Mutiullah Samim -->

    <!-- Bootsrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="assets/styles1.css">

    <style>
        /* Agrega los estilos de los íconos de redes sociales aquí */
        .social-icons span {
            margin-bottom: 10px;
            font-size: 50px;
        }

        /* Estilos para el logo en la esquina superior izquierda */
        #logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 500px; /* Ajusta el ancho según tus necesidades */
            height: auto; /* Esto mantendrá la proporción de la imagen */
        }
    </style>
</head>
<body>
<main class="container aling-center p-5">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="text-center" style="margin-top: 5px;">
                <i class="fas fa-solid fa-user-plus fa-10x"></i>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('validar-registro') }}">
                    @csrf <!-- Agrega el token CSRF para la seguridad -->
                    <div class="mb-3">
                        <label for="emailImput" class="form-label"  > Email</label>
                        <input type="email" class="form-control" id="emailInput"
                        name="email" required autocomplete="disable">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="userInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="userInput" name="name" required autocomplete="disable">
                    </div>
                    <button type="submit" class="btn btn-primary">REGISTRASE</button>
                </form>
                
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Ya tienes cuenta? <a href="{{route('login')}}">INICIA SESION</a>
                </div>
                
            </div>
        </div>
    </div>
</main>

<!-- Logo en la esquina superior izquierda -->
<img id="logo" src="https://tinypic.host/images/2023/09/30/Logofarmacia.png" alt="Logo de la farmacia">

<!-- Social Icons outside the card -->
<div class="social-icons-container">
    <div class="social-icons">
        <span><i class="fab fa-facebook-square"></i></span>
        <span><i class="fab fa-google-plus-square"></i></span>
        <span><i class="fab fa-twitter-square"></i></span>
    </div>
</div>
</body>
</html>