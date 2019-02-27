<?php include("includes/funciones.php") ?>
<?php require_once("Connections/coneccion.php");?>

                        <?php
                        require_once("Connections/coneccion.php");
                        $consulta_vehiculos = "SELECT id,marca,imagen,modelo,precio FROM vehiculos";
                        $res2 = mysql_query($consulta_vehiculos,$conn);
                        $cant = mysql_num_rows($res2);
                        $titulo = "Inicio";
                        ?>

<?php include("includes/header.php") ?>
<script src="css/jquery.js"></script>
<script src="css/bootstrap.min.js"></script>

<section id="cuerpo">
  <nav id="menu1">
                        <ul>
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="vehiculos.php">Vehiculos</a></li>
                          <li><a href="personas.php">Persona</a></li>
                          <li><a href="carrito.php">Carrito</a></li>
                        </ul>

  

  <div id="inicio">
  <img src="imagenes/carru1.jpg" width="800" height="422" alt=""/> 
  <p>Bienvenido a la mejor tienda Online de compra de vehiculos</p>
  <p>En esta pagina podras encontrar los mejores autos Europeos, a los mejores precios y una manera facil y rapida de reservar su auto.</p>
</div>

</section>

<?php include("includes/footer.php") ?>

</body>
</html>