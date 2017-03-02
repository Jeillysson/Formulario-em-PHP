<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8" />
  </head>

  <body>
    <?php
    if( $_POST["nomeCompleto"] or $_POST["email"] or $_POST["idade"]){
      echo "Bem vindo ".$_POST['nomeCompleto']."<br/>";
      echo "Sua idade é ".$_POST['idade']." anos! <br/>";
      echo "Seu e-mail é ".$_POST['email'];

      if ($_POST["masculino"] == "on"){
        echo "<br/>Sexo Masculino";
      } else {
        echo "<br/>Sexo Feminino";
      }

      echo "<br/> Imagem -> ".$_POST['fileupload'];

      exit();
    }
     ?>
  </body>

</html>
