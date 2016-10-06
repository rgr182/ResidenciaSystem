<?php
          include_once ("dbConex.php");;
          //$conexion=conexion.php ();
          $turno=$_POST["turno"]; 
          $Frecuencia=$_POST["Frecuencia"]; 
  
function execute($turno,$Frecuencia) 
{ 
$q1= "INSERT INTO tablaturno (turno) values ('$turno')"; 
$resultquery = mysqli_query($q1); 
$errores = mysqli_errno(); 

$q2= "INSERT INTO tablafrecuencia (Frecuencia) values ('$Frecuencia')"; 
$resultquery = mysqli_query($q2); 
$errores = $errores + mysqli_errno(); 
return $errores; 
} 

$result = execute($turno,$Frecuencia); 

if ($result == 0) { 
echo "Todo Ok"; 
}  
else 
{ 
echo "Error al insertar datos" ;
}  

?>