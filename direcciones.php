<?php
include_once "base_de_datos.php";
 session_start();
$id_usuario = $_SESSION['id_usuario'];

if ((!isset($_SESSION['id_usuario'])) || ($_SESSION['id_usuario'] == '0')) {
<script language="javascript">
alert("Usuario no Logueado en el sistema.");
  window.location.href="index.html";
</script>

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Microspeed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
      table th {
        color: white;
      }
      table tr {
        color: white;
      }
    </style>
  </head>
  <body>

    <header>
    <nav>
      <div id="navbar" class="nav-wrapper">
        <a><img height="50" src="banner.png" alt="banner"></a>
      </div>
    </nav>
    </header>

    <table>
    <thead>
      <tr>
        <th>CLiente</th>
        <th>Direcciones</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($personas as $persona){ ?>
      <tr>
        <td><?php echo $persona->nombre ?></td>
        <td><?php echo $persona->direccion ?></td>
        <td><a href="<?php echo "editar.php?id=" . $persona->id?>">Editar</a></td>
        <td><a href="<?php echo "eliminar.php?id=" . $persona->id?>">Eliminar</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="black-text">MicroSpeed</h5>
              <p class="black-text text-lighten-4">Empresa encargada de deliveries por todo el pais tanto entregas como retiros</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="black-text">Redes Sociales</h5>
              <ul>
                <li><a class="black-text text-lighten-3" target="_blank" href="https://twitter.com/MicroSpeed">Twitter</a></li>
                <li><a class="black-text text-lighten-3" target="_blank" href="https://www.facebook.com/MicroSpeed">Facebook</a></li>
                <li><a class="black-text text-lighten-3" target="_blank" href="https://www.instagram.com/MicroSpeed">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          <h6 style="color:black;">© 2018 Copyright</h6>
          <a class="black-text text-lighten-4 right" href="#logo">Arriba</a>
          </div>
        </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  </body>
</html>

