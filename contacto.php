<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contacto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>

<?php
  $name = $_POST["name"];
  $number = $_POST["number"];
  $email = $_POST["email"];
  $servicio = "";
  $antes = "";

  if ($_POST["servicio1"]==true){
    $servicio="Amazon cloud drive";
  }elseif($_POST["servicio2"]==true){
    $servicio="Box";
  }elseif($_POST["servicio3"]==true){
    $servicio="Dropbox";
  }elseif($_POST["servicio4"]==true){
    $servicio="OneDrive";
  }elseif($_POST["servicio5"]==true){
    $servicio="Google Dirve";
  }
  
  if ($_POST["antes"]==true) {
      $antes="si";
} else {
  $antes="No";
}
  $datos="
  name: $name
  number: $number
  email : $email
  servicio: $servicio
  antes: $antes
  ";
  $archivo = fopen("prueba.txt", "w+");
  fwrite($archivo,$datos);
  fclose($archivo);
  ?>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
        <li><a href="form2.html">Servicios</a></li>
        <li><a href="form4.html">Clientes</a></li>
        <li><a href="form3.html">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <img src="static/logo.jpg" alt="" height="100px">
      </div>
      <div class="col-sm-8 text-left">
        <div class="container">
          <h2>Contacto</h2><br><br>
          <p>Tu informaci??n ha sido enviada</p>
        </div>
      </div>
    </div>
    <footer class="container-fluid text-center">
      <p>Curso de desarrollo web</p>
    </footer>
</body>

</html>