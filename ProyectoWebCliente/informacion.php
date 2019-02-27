<?php include("includes/funciones.php") ?>
<?php
if (isset($_GET["id"])){ 
$venta_id = $_GET["id"];
if (isset($ventas[$venta_id])){
$venta = $ventas[$venta_id];
}
}

?>

<?php
require_once("Connections/coneccion.php");
$consulta_info = "SELECT * FROM vehiculos WHERE id=".$_GET['id'];
$resinfo = mysql_query($consulta_info,$conn);
$titulo = "Informacion";
?>

<?php $titulo = "Informacion";?>

<?php include("includes/header.php") ?>

<center>
		<nav id="menu1_info">
										  <ul>
										    <li><a href="index.php">Inicio</a></li>
										    <li><a href="vehiculos.php">Vehiculos</a></li>
										    <li><a href="#">Persona</a></li>
										    <li><a href="carrito.php">Carrito</a></li>
										  </ul>
		 </nav>
</center>


<div = id="imagen">

										<?php	while($venta = mysql_fetch_array($resinfo)) {?>
												

											 <h1><?php echo $venta['marca']; ?></h1><br>;
											 <img src="<?php echo $venta['imagen']; ?>" alt="<?php echo $venta['marca'] ?>" width="400" height="400"><br>;
										     <p><?php echo $venta['modelo']; ?></p><br>;
											 <p><?php echo $venta['precio']; ?></p><br>;
											 <p><a href="./carrito.php?id=<?php  echo $venta['id'];?>">Añadir al carrito </a></p><br>;
											 <p><?php echo $venta['descripcion']; ?></p>;


										<?php  }   ?>

</div>


<?php include("includes/footer.php") ?>