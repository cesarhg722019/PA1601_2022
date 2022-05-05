<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registro grupos</title>
        <!-- Algo de CSS para darle un poco de vista -->
        <style>

h1{
    text-align: center;
    color: #000FF;
    border-bottom: #CC955A ;
    width: 50 %;
    margin: auto;
}

table {
    border: 1px solid #CCA633 ;
    padding: 20px 50px;
    margin-top: 50px;
}

body{
  background-color: #87CCC1;
}

</style>

  </head>
  <body>
    
  <h1 align="center"> Registro de grupos</h1>

  <form action="insert/insert_grupos.php" name="formulario1" method="post"

 >

  <!-- Recuerden que mediante el atributo action indicamos al 
formulario el archivo que se va a enviar la informacion '
  para que esta sea procesada -->
  <table border="0" align="center">
 
   <tr>
      <td>
      Descripcion del grupo
      </td>
      <td><label for="descripciongrupo"></label>
      <input type="text" name="descripciongrupo" id="descripciongrupo" /></td>
  </tr>
   
      <td align="center "> <input type="reset" name="Borrar" 
id="Borrar" value="Borrar" /></td>
      <td align="center"> <input type="submit" name="enviar" 
id="enviar" value="Enviar" /></td>


      </tr>


  </table>

  </form>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  



         




?>


</body>
</html>
