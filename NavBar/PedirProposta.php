<?php
 include_once("../ConnectionBD/connectbd.php");
 require 'NavBar.php';
 require 'Footer.php';
?>




<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Aluno</title>
</head>

<html lang="pt">

<head>
  <title>Pedir proposta</title>
  <link rel="icon" href="../Imagens/logo.jpg">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS e Bootstrap -->
  <link rel="stylesheet" href="../CSS/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JQUERY -->
  <script src=
      "https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
       crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="../JQUERY/script.js"></script>
</head>

<body>


<!-- NavBar para verificar qual o tipo_user e receber as permissões -->
<?php navbar(); ?>

  <!-- Texto e outros //////////////////////////////////////////////////////////////////////////////////////////////-->
  <p> propostas</p>

  <form action="/PedirProposta.php" method="POST">
  <textarea name="descricao"></textarea><br>
  <label for="v c">Empresa</label><br>
  <label for="local">Local</label><br>
  <input type="submit" value="Submit">
  </form> 

<?php
echo $_POST['descricao'];
?>

<table>
    
</table>

<!-- Footer -->
<?php footer(); ?>

</body>
</html>