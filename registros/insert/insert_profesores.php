<html>
 <head>
     <title>Registro profesores </title>
 </head> 
 <body>
     
   
<?php

$nombre = '$_POST[nombre]';
$apaterno = '$_POST[apaterno]';
$amaterno = '$_POST[amaterno]';
$telefono = '$_POST[telefono]';
$mail = '$_POST[mail]';
$domicilio = '$_POST[domicilio]';


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

  $instruccion_SQL = "INSERT INTO profesor (claveprof, nombreprof, 
apaternoprof, amaternoprof, telefonoprof, mailprof, domicilioprof)
  VALUES ('$_POST[claveprof]','$_POST[nombre]','$_POST[apaterno]','$_POST[amaterno]','$_POST[telefono]','$_POST[mail]','$_POST[domicilio]')";



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
       echo "<table><tr><td>Nombre del profesor:'$_POST[nombre]'</td></tr>";
       echo "<tr><td>Apellido paterno:'$_POST[apaterno]'</td></tr>" ;
       echo "<tr><td>Apellido materno:'$_POST[amaterno]'</td></tr>" ;
       echo "<tr><td>Telefono:'$_POST[telefono]'</td></tr>" ;
       echo "<tr><td>Correo electronico:'$_POST[mail]'</td></tr>" ;
       echo "<tr><td>Domicilio:'$_POST[domicilio]'</td></tr>" ;
       
       
   }

?>





</body>
</html>