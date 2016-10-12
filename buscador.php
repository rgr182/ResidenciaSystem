<?php
include 'conexion.php';
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$query1="SELECT nombredelauditor LIKE'%".$busca."%' FROM tablaempleado";
 $consulta= mysqli_query($conexion,$query1);

 while($f = mysqli_fetch_array($consulta)){
 echo $f['nombredelauditor'].'&nbsp;&nbsp;'.$f['contra']."<br>";

}
}