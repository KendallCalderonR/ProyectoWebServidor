<?php
	session_start();
	include'Connections/coneccion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from vehiculos where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)){
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						 }
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

			}
		}

	}else{
		if (isset($_GET['id'])) {
			$nombre = "";
			$precio = 0;
			$imagen= "";
			$res=mysql_query("select * from vehiculos where id".$_GET['id']);
			while ($car=mysql_fetch_array($res)) 
			{
				$nombre = $car['nombre'];
				$precio = $car['precio'];
				$imagen = $car['imagen'];
			}
			$arreglo[] = array('Id' => $_GET['id'] ,
							 'Nombre'=> $nombre,
							 'Precio'=>$precio,
							 'Imagen'=>$imagen,
							 'Cantidad'=> 1);
			$_SESSION['carrito']=$arreglo;

			
		}
	}
?>

<?php
require_once("Connections/coneccion.php");
$consultamenu2 = "SELECT * FROM menu2 WHERE tipo = 2";
$res2 = mysql_query($consultamenu2,$conn);
$cant2 = mysql_num_rows($res2);
$titulo = "Carrito";
?>

<!doctype html>
<html>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="javascript/js_fun.js" ></script>
</head>

<body>
		<center>
		<header id="cabeza"><img src="imagenes/banner.jpg" width="960" height="400" alt=""/></header>
		</center>

		<center>
		<nav id="menu1_carrito">
								  <ul>
								    <li><a href="index.php">Inicio</a></li>
								    <li><a href="vehiculos.php">Vehiculos</a></li>
								    <li><a href="personas.php">Persona</a></li>
								    <li><a href="carrito.php">Carrito</a></li>
								  </ul>
		</nav>
		</center>
		<center>
		<div id="carrito">
									<?php
										$total = 0;
								if(isset($_SESSION['carrito'])){
											$datos = $_SESSION['carrito'];
											
									for ($i=0; $i<count($datos) ; $i++) { ?>
										<div class="producto">
													<center>
														<img src="./<?php echo $datos[$i]['Imagen'];?>"><br>
														<span ><?php echo $datos[$i]['Nombre'];?></span><br>
														<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
														<span>Cantidad: 
															<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
															data-precio="<?php echo $datos[$i]['Precio'];?>"
															data-id="<?php echo $datos[$i]['Id'];?>"
															class="cantidad">
														</span><br>
														<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
														
													</center>
												</div>

									<?php
											$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;		
											}
								}else{
											echo '<center><h2>El Carrito de compras esta vacio</h2></center>';
										}
										echo '<center><h2>Total:'. $total.' </h2></center>'?>

									
										
										<center><a href="compras/compras.php" class="aceptar">Comprar => </a></center>;
								<center><a href="carrito.php" class="aceptar" onclick="<?php unset($_SESSION['carrito']);?>">-->Cancelar compra<-- </a></center>;
									<center><a href="vehiculos.php">Agregar mas...</a></center>


		</div>
		</center>

		<?php include("includes/footer.php") ?>

</body>
</html>