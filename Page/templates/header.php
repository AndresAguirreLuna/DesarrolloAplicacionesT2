<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="/Assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <div id="titulo">
            <h1>Sistema de Bibliotecas</h1>
        </div>
        
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: cadetblue;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://www.iudigital.edu.co/images/11.-IU-DIGITAL.png" alt="Logo" width="60%" height="80%" class="d-inline-block align-text-top">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <div class="col-12">
                  <a href="http://localhost/DesarrolloAplicacionesT2/Page/Autor/Index.php" >
                    <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Autor </button>
                  </a>
                  </div>  
            </li>
            <li class="nav-item">
                <div class="col-12">
                  <a href="http://localhost/DesarrolloAplicacionesT2/Page/Libro/Index.php" >
                    <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Libro </button>
                  </a>
                  </div>  
            </li>
            
            <li class="nav-item">
                <div class="col-12">
                    <a href="http://localhost/DesarrolloAplicacionesT2/Page/Ejemplares/Index.php" >
                    <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Ejemplar </button>
                    </a>
                </div>
            <li class="nav-item">
                  <div class="col-12">
                      <a href="http://localhost/DesarrolloAplicacionesT2/Page/Usuarios/Index.php" >
                      <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Usuarios </button>
                      </a>
                  </div>         
            </li>
 
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
     
       <br>
        </div>
      </div>
    </nav>
        <!-- Contenido -->