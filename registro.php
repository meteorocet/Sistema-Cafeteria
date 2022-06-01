
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Registro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <form method="post" action="<?php if(isset($_POST['registro'])){
      echo "index.php";
    }
    else{
      echo "";
    }?>">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.jpg" alt="" width="20%" height="20%">
      <h2>Registro</h2>
      <p class="lead">Ingrese los Siguientes Datos</p>
    </div>

    <div class="row g-5">
      <div class="col-md-16">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">DNI</label>
              <input type="text" class="form-control" id="firstName" placeholder="74129285" value="" required name="dni">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nombres y Apellidos</label>
              <input type="text" class="form-control" id="lastName" placeholder="Jesus Quinto" value="" required name="nom">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="email" class="form-control" id="username" placeholder="a@gmail.com" required name="email">
              <div class="invalid-feedback">
                  Campo Requerido
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="email" placeholder="" required name="pass">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="address" placeholder="Jr. Los Girasoles" required name="dir">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Telefono</label>
              <input type="text" class="form-control" id="telefono" placeholder="94741125" required name="tele">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="registro">Registrase</button>
        </form>
      </div>
    </div>
  </main>
    <?php
include 'conexion.php';
if(isset($_POST['registro'])){
    error_reporting(0);
    $dni  = utf8_decode($_POST['dni']);
    $nom = utf8_decode($_POST['nom']);
    $email = utf8_decode($_POST['email']);
    $pass = utf8_decode($_POST['pass']);
    $dir = utf8_decode($_POST['dir']);
    $tele = utf8_decode($_POST['tele']);

    $query = $con->query("insert into usuario(user_dni_txt,user_contrasenia_string,user_nombre_string,user_email_string,user_direccion_string,user_telefono_string,rol_cod_int) values ('". $dni ."','".$pass."','".$nom."','".$email."','".$dir."','".$tele."','2')");
    if(!$query){
        die('Error :'. mysqli_error(error_get_last()));
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Registrado Correctamente")';
        echo '</script>';
    }
}
    ?>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Anteiku</p>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
