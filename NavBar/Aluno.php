<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start();
require 'NavBar.php';
require 'Footer.php';

if($_SESSION["tipo_user"]!='A'){
  header('Location: ../Errors/RestrictPage.php');
  exit();
}

//Atributos de erro no TryCatch
$erro1 = 'Faça login';
?>

<!doctype html>
<html lang="pt">

<head>
  <title>Gestão de Projetos/Estágios</title>
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

  <!-- Texto e outros -->
  <h4 class="text-center">Bem vindo! - Aluno</h4>

<a href="PPA.php">Pedido de Projeto</a>
<br>
<a href="PEA.php">Pedido de Estagio</a>
<br>
<a href="CPA.php">Consulta de Projeto</a>
<br>
<a href="CEA.php">Consulta de Estagio</a>
<br>

<!-- Footer -->
<?php footer(); ?>

</body>

</html>