<? 

function abrirConexion () 
{ 
     $dbConex = mysql_connect("localhost","root","dulce"); 
      if (! $dbConex) 
      { 
          echo "Imposible Conectar"; 
          exit;           
      } 
     mysql_select_db("controlextrusion", $dbConex); 
     return $dbConex; 
} 

function cerrarConexion ($dbConex) { 
mysql_close($dbConex); 
} 
       

?>