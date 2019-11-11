<!doctype html>
<?php   session_start();  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Trabajo Practico</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>
   <?php
            if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
             {
                 //header("Location:Login.php");  
             }

                

                echo "<a href='logout.php'> Logout</a> "; 
      ?>
    <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Julissa JOSEPH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Registro.php">Registrate <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="patente.php">RegistrarVehiculo <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="facturar.php">Facturas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listadofacturas.php">facturados</a>
            </li>
          </ul>
          <?php 
            if(isset($_SESSION['Nombre'])==false){
            ?>
           <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
           </ul>
           <?php 
            }
            ?>
                      <?php 
            if(isset($_SESSION['Nombre'])){
            ?>
           <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
              <a class="nav-link" href="login.php">Logout <span class="sr-only">(current)</span></a>
            </li>
           </ul>
           <?php 
            }
            ?>
      </nav>
    </header>

    <main role="main" class="container">
    <div class="card text-center">
  <div class="card-header">
    Mi Estacinamiento
  </div>
  <div class="card-body">
    <h5 class="card-title">Pul estacionamiento</h5>
    <p class="card-text">Una estacionamiento acorde a tu perfil y seguro.</p>
    <a href="Registro.php" class="btn btn-primary">Estacionar</a>
  </div>
  <div class="card-footer text-muted">
    Bienvenido
  </div>
</div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">@2019 IIEConcepcion TP.</span>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>
