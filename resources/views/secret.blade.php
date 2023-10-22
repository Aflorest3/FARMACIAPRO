<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD FARMACIA</title>
    <link rel="stylesheet" type="text/css" href="assets/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
    <main class="container text-center p-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cerrar sesión</button>
        </form>

        <h1 class="my-4"></h1>
        <br>
        <br>
        <br>
        
        <img id="logo" src="https://tinypic.host/images/2023/09/30/Logofarmacia.png" alt="Logo de la farmacia">

        <a href="/create" class="btn btn-primary svg-wrapper" style="width: 250px">
            <svg class="spot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 40">
              <rect id="shape" width="100%" height="100%" />
              <text id="text" x="50%" y="50%" text-anchor="middle"  >
                <a href="/create">Agregar Medicamento</a>
              </text>
            </svg>
          </a>
          
          <a href="/index" class="btn btn-primary svg-wrapper" style="width: 250px">
            <svg class="spot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 40">
              <rect id="shape" width="100%" height="100%" />
              <text id="text" x="50%" y="50%" text-anchor="middle">
                <a href="/index">Mostrar Medicamento</a>
              </text>
            </svg>
          </a>
          

    </main>
</body>
</html>