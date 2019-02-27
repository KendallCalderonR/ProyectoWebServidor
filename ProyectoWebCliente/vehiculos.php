<?php include("includes/funciones.php") ?>

<?php
require_once("Connections/coneccion.php");
$consultamenu2 = "SELECT * FROM menu2 WHERE tipo = 2";
$res = mysql_query($consultamenu2,$conn);
$cant = mysql_num_rows($res);
$titulo = "Vehiculos";
?>

<?php
require_once("Connections/coneccion.php");
$consulta_vehiculos = "SELECT * FROM vehiculos";
$res2 = mysql_query($consulta_vehiculos,$conn);
$titulo = "Vehiculos";
?>

<?php include("includes/header.php") ?>

<section id="cuerpo_vehiculos">
<nav id="menu1_vehi">
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="vehiculos.php">Vehiculos</a></li>
    <li><a href="personas.php">Persona</a></li>
    <li><a href="carrito.php">Carrito</a></li>
  </ul>


<nav id="menu2_vehi">
	<ul>
      <?php
	    while ($fila = mysql_fetch_array($res))
	    {
			echo '<li><a href="seleccion.php?marca='.$fila['nombre'].'">'.$fila['nombre'].'</a></li>';
		}
	  ?>
  </ul>

</nav>

<div id="ventas_vehi">
<form >


<?php while($venta = mysql_fetch_array($res2)) {

  echo '<div class = "articulo">';
  echo '<h2>'.$venta['marca'].'</h2>';
  echo '<img src="'.$venta['imagen'].'">';
  echo '<p>'.$venta['modelo'].'</p>';
  echo '<p>'.$venta['precio'].'</p>';?>
        <a href="./informacion.php?id=<?php  echo $venta['id'];?>">ver mas..</a>;
<?php	echo '</div>';
}   ?>

</form>
</div>

</section>



</body>
</html>