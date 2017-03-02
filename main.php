<?php
  include "arquivo.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8"/>
    <title> Formulário </title>
    <link  href="css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <h2> Registre Seus Dados </h2>
    <form method="POST">
      <h3>Nome Completo: <input id="nome" type="text" name="nomeCompleto" size = "50" /><br/>
        Email:<input id="email" type="text" name="email" size="50" /><br/>
        Idade:<input id="idade" type="text" name="idade" size="10"/>
        Sexo:
        <input  type="checkbox" name="masculino" value="on" /> Masculino
        <input  type="checkbox" name="feminino" value="on" />Feminino <br><br>

        <input type="file" name="fileupload" accept="image/*" /> <br/> <br/>



        <input type="submit" />
    </form>
  </body>

</html>
