<?php
session_start();
?>
<html>
<head>

<title>VALIDANDO...</title>
</head>
<body>
<?php
include 'conexion.php';
if(isset($_POST["idModal"])){
$idModal =$_POST['idModal'];
$ContraseModal =$_POST['ContraseModal'];
 $SQL="SELECT * FROM tablaempleado WHERE idempleado= '$idModal' AND contra = '$ContraseModal'";
$result=mysqli_query($conexion,$SQL)or die("Error:".mysqli_error($conexion));
if(mysqli_num_rows($result)>0){
 $session['login']= $idModal;
 while($row=mysqli_fetch_assoc($result)){
 	$_SESSION['idModal']= $row['idempleado'];
 	$_SESSION['contraseModal']= $row['contra'];
 	echo "tiene resultados 2";
 
} 	

 }else{
 	echo'<script type="text/javascript">window.location="formulariodeingreso.php"</script>';
 	$_SESSION['login']='';
 	print('
<script type="text/javascript"> //place html script for alert. Use single comma for print command here.
    alert("Sorry, your username or password could not be recognized")
</script>
');
session_destroy();
}
}
?>
</body>
</html>