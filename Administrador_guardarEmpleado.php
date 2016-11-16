
<html>
<body>
<form id="guardaEmpleado" action="aagregarempleado.php"method="post" enctype="multipart/form-data">
	 <table  id="agregarempleados">
          <th colspan="2">AGREGAR USUARIOS</th>
          <tr><td>TIPO DE USUARIO</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
          include 'conexion.php';
         $query = 'SELECT * FROM tablatipousuario';
         $result = $conexion->query($query);
         ?>&nbsp;
         <SELECT name="tipousuario" id="tipousuario">
          <?php
          while ( $row = $result->fetch_array() )
           {
        ?>
        <option value="<?php echo $row['tipousuario']?>" >
        <?php echo $row['tipousuario']; ?>
        </option>
        <?php
         }
         ?>
            </select></td>
     	</tr>
     	<tr>
     		<td><br>NUMERO DE EMPLEADO</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="idempleado" id="idempleado" value=""  size="2" maxlength="4">
     	</tr>
     		<tr>
     		<td><br>NOMBRE DEL AUDITOR</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="nombre" id="nombre" value=""></td>
     	</tr>
     	<tr>
     <td><br>CONTRASEÑA</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="contra" id="contra" value="" size="2" maxlength="4">
     	</tr>
     	<tr>
            <button>Agregar</button>
    </form>
</body>
    </html>