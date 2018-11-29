<?php session_start();
$id_usuario = $_SESSION['id_usuario'];
?>
<?php 
if ((!isset($_SESSION['id_usuario'])) || ($_SESSION['id_usuario'] == '0')) {
  ?>
<script language="javascript">
alert("Usuario no Logueado en el sistema.");
  window.location.href="index.php";
</script>
<?php

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Microspeed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
      input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea{
        color: white;
      }

      html {
        background: black;
      }

      body {  
        justify-content: center;
        width: 800px;
        margin-left: auto;
        margin-right: auto;
        padding: 0%;
      }

      .page-footer .footer-copyright{
        background: white;
      }

      nav {
        background: white;
      }
      
      nav ul a {
        color: black;
      }

      .btn:hover, .btn-large:hover, .btn-small:hover{
        width: 510px;
        margin-left: 20%;
      }
      .btn, .btn-large, .btn-small{
        width: 510px;
        margin-left: 20%;
      }

      header {
        background: white;
        color: black;
        padding: 0 10px 0 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 100px;
      }

      .page-footer {
        background: white;
      }

      table{
        color:white;
      }

      footer {
        background: white;
        margin-top: 100px;
        height: 250px;
      }

      #login {
        margin: 35%;
      }

      select{
        background: transparent;
        color:white;
        display: block;
        width: 100%;
      }
    </style>
    <script src="javascript.js"></script>
  </head>
  <body>

    <header>
    <nav>
      <div id="navbar" class="nav-wrapper">
        <a><img height="50" src="banner.png" alt="banner"></a>
      
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="boton" href="mapas.php">Inicio</a></li>
          <li><a class="boton" href="pedido.php">Realizar o aceptar Pedido</a></li>
        </ul>
      </div>
    </nav>

    </header>

    <section id="boton">
      <?php 
      include_once("class/clsUsuarios.php");
      $Usuario = new clsUsuarios();
      $pedidos = $Usuario->PedidosDisponibles()
      ?>
      <p>
      <table id="tabla">
  <tr>
    <th scope="col">ID Pedido</th>
    <th scope="col">Nombre</th>
    <th scope="col">Direccion Origen</th>
    <th scope="col">Direccion Destino</th>
    <th scope="col">Pedido</th>
    <th scope="col">Peso</th>
    <th scope="col">Altura</th>    
    <th scope="col">Ancho</th>
    <th scope="col">Precio Ofrecido</th>
    <th scope="col"></th>      
  </tr>
  <?php foreach ($pedidos as $pedido) {
    # code...
    $id_pedido = $pedido['id_pedido'];
  ?>
  <tr>
    <td><?php echo $pedido['id_pedido'] ?></td>
    <td><?php echo $pedido['nombre'] ?></td>
    <td><?php echo $pedido['direccion_origen'] ?></td>
    <td><?php echo $pedido['direccion_destino'] ?></td>
    <td><?php echo $pedido['pedido'] ?></td>
    <td><?php echo $pedido['peso'] ?></td>
    <td><?php echo $pedido['altura'] ?></td>
    <td><?php echo $pedido['ancho'] ?></td>
    <td id="precioOfrecido"></td>
    <td id="horasAproximadas"></td>
    <td><button type="button" id="pepe" onclick="window.location.href='contratar.php?p=<?php echo $id_pedido;?>'" class="waves-effect waves-light btn-small"><strong>Realizar</strong></button></td>  
  </tr>
<?php } ?>
</table>
    </section>

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
          <a class="black-text text-lighten-4 right" href="login.php">Cerrar Sesion</a>
          </div>
        </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  </body>
</html>



