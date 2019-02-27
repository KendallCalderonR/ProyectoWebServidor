
<?php include("includes/funciones.php") ?>

<?php
      require_once("Connections/coneccion.php");
      $consultamenu2 = "SELECT * FROM menu2 WHERE tipo = 2";
      $res = mysql_query($consultamenu2,$conn);
      $cant = mysql_num_rows($res);
      $titulo = "Seleccion";
?>

<?php
      require_once("Connections/coneccion.php");
      $consulta_vehiculos = "SELECT id,marca,imagen,modelo,precio,tipo FROM vehiculos";
      $res2 = mysql_query($consulta_vehiculos,$conn);
      $cant = mysql_num_rows($res2);
?>

<?php
      if (isset($_GET["id"])){ 
      $venta_id = $_GET["id"];
      if (isset($ventas[$venta_id])){
      $venta = $ventas[$venta_id];
      }
}

?>

<?php $titulo = 'Seleccion';?>

<?php include("includes/header.php") ?>

            <nav id="menu1_sel">
                          <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="vehiculos.php">Vehiculos</a></li>
                            <li><a href="personas.php">Persona</a></li>
                            <li><a href="carrito.php">Carrito</a></li>
                          </ul>
            </nav>


            <nav id="menu2_sel">
                        	<ul>
                              <?php

                        	    while ($fila = mysql_fetch_array($res))
                        	    {
                        			echo '<li><a href="seleccion.php?marca='.$fila['nombre'].'">'.$fila['nombre'].'</a></li>';
                        			$tipo = $fila['tipo'];
                        		}
                        	  ?>
                          </ul>
            </nav>


            <div = id="marcas">

                            <?php
                            $x = 1;

                            $ventas;
                            while ($venta = mysql_fetch_array($res)){
                              $id = $venta['id'];
                              $tipo = $venta['tipo'];

                              if($venta['marca'] == "Aston Martin"){


                              echo '<div class = "articulo">';
                              echo '<h1>'.$venta['marca'] .'</h1>';
                              echo '<img src='.$venta['imagen'].' alt="'.$venta['marca'].'width="400" height="400">';
                              echo '<p>'.$venta['modelo'].'</p>';
                              echo '<p>'.$venta['precio'].'</p>';
                              echo '<input type="image" src="imagenes/carrito.png" name ="btn_carrito" width="50" height="50">';
                              echo '<p>'.$venta['descripcion'].'</p>';
                              echo '</div>';
                              }
                            }  
            ?>




            </div>

            

<?php include("includes/footer.php") ?>