<html>
 <head>
     <title>Registro alumnos </title>
 </head> 
 <body>
     
   
<?php

$idgrupo = '$_POST[idgrupo]';
$descripciongrupo = '$_POST[descripciongrupo]';
$estatusdelgrupo = '$_POST[estatusdelgrupo]';

 $connexion = mysqli_connect("localhost", "root", "", "eg") or
 die("Problemas con la conexión");

 // mysqli_set_charset($connexion,"utf8");

  $instruccion_SQL = "INSERT INTO grupos (
descripciongrupo)
  VALUES ('$_POST[descripciongrupo]')";



   $resultado = mysqli_query($connexion,$instruccion_SQL);

   mysqli_close($connexion);


   /*Comprobamos al menos que $resultado se ejecutó satisfactoriamente hay 
muchos otros métodos más seguros
   de saber si lo que enviamos realmente se insertó en la base de datos pero 
todo a su paso*/
   if($resultado == FALSE)
   {
       echo "error en la consulta";
   }  else
   {
       echo "Registro guardado<br><br>";
       echo "<tr><td>Descripcion del grupo:'$_POST[descripciongrupo]'</td></tr>" ;
       
       

   }



            




?>


</body>
</html>