<html>
 <head>
     <title>Registro ciclo escolar </title>
 </head> 
 <body>
     
   
<?php

$descripcionciclo = '$_POST[descripcionciclo]';



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

  $instruccion_SQL = "INSERT INTO cicloescolar (descripcionciclo)
  VALUES ('$_POST[descripcionciclo]')";



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
       echo "<table><tr><td>descripcion ciclo:'$_POST[descripcionciclo]'</td></tr>";
      
       
       
       

   }



            









?>
</body>
</html>