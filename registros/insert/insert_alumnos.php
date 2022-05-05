<html>
 <head>
     <title>Registro alumnos </title>
 </head> 
 <body>
     
   
<?php

$matricula = '$_POST[matricula]';
$nombre = '$_POST[nombre]';
$apaterno = '$_POST[apaterno]';
$amaterno = '$_POST[amaterno]';
$domicilio = '$_POST[domicilio]';
$tutor = '$_POST[tutor]';


//Dirección a la BD

$db_host = "localhost";

//Nombre de la BD

$db_nombre = "saechg";

//Usuario de la BD

$db_usuario = "root";

//Contraseña de la db

$db_password = "";


//$connexion = mysqli_connect($db_host,$db_usuario,$db_password);

//if( mysqli_connect_error())
  //{

    //  echo "Hubo un problema con la base de datos error al conectar";

      //exit() ;
  //}

 //mysqli_select_db($connexion,$db_nombre) or die ("No se encuentra la Base de 
 //datos");
 $connexion = mysqli_connect("localhost", "root", "", "eg") or
 die("Problemas con la conexión");

 // mysqli_set_charset($connexion,"utf8");

  $instruccion_SQL = "INSERT INTO alumnos (matricula, nombre, 
apaterno, amaterno, domicilio, tutor)
  VALUES ('$_POST[matricula]','$_POST[nombre]','$_POST[apaterno]','$_POST[amaterno]','$_POST[domicilio]','$_POST[tutor]')";



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
       echo "<table><tr><td>alumnos:'$_POST[matricula]'</td></tr>";
       echo "<tr><td>nombre:'$_POST[nombre]'</td></tr>" ;
       echo "<tr><td>apaterno:'$_POST[apaterno]'</td></tr>" ;
       echo "<tr><td>amaterno:'$_POST[amaterno]'</td></tr>" ;
       echo "<tr><td>domicilio:'$_POST[domicilio]'</td></tr>" ;
       echo "<tr><td>tutor:'$_POST[tutor]'</td></tr>" ;
       
       
       

   }



            




?>


</body>
</html>