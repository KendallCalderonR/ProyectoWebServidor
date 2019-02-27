
<?php include("includes/header.php") ?>



<section id="cuerpo">
<center>
  <nav id="menu1_per">
                        <ul>
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="vehiculos.php">Vehiculos</a></li>
                          <li><a href="personas.php">Persona</a></li>
                          <li><a href="carrito.php">Carrito</a></li>
                        </ul>
  </nav>
</center>
  
<script type="text/javascript" src="javascript/js_personas.js"></script>
  <div id="personas">
   <center> 
    <form name="frm_personas">
    
        <table>
          <tr>
            <td><label>Numero de tarjeta:</label></td>
            <td><input type="text" name="txt_numTar"></td>
          </tr>
          <tr>
            <td><label>Mes de vencimiento: </label></td>
            <td><input type="select" name="txt_Mven"></td>
          </tr>
           <tr>
            <td><label>Año de vencimiento: </label></td>
            <td><input type="text" name="txt_Aven"></td>
          </tr>
          <tr>
            <td><label>Codigo de seguridad: </label></td>
            <td><input type="text" name="txt_codigo"></td>
          </tr>
          <tr>
            <td><label>Tipo:</label></td>
            <td><select name="tipo">
                <option value="Visa">Visa</option>
                <option value="Master Card">Master Card</option>
                <option value="American Express">American Express</option>
              </select></td>
          </tr>
          <tr>
            <td><input type="button" name="btn_enviar" value="Enviar" onclick="validar()"></td>
          </tr>

        </table>
    </form>
   </center>
  </div>

  

</section>

<?php include("includes/footer.php") ?>

</body>
</html>