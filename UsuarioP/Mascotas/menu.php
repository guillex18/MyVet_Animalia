<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>

    <?php
       
        require_once 'scripts.php';
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="../Agregar_Usuario.php">Agregar Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Turnos/VistaTurnos.php">Turnos Peluqueria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Agregar Mascota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="../../PHP/Cerrar.php">Cerrar Sesion</a>
      </li>
    </ul>
    
  </div>
</nav>
    



</body>
</html>



