<?php
 include_once("../ConnectionBD/connectbd.php");
 session_start(); 

 function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['descricao']) && isset($_POST['empresa']) && isset($_POST['local'])) {

  $descricao = validate($_POST['descricao']);
  $id_aluno = validate($_POST['id_aluno']);


  //Query para insert
  $sql = "INSERT INTO Proposta (descricao,id_aluno)
  VALUES ('$descricao', '$empresa', '$local','$id_aluno')";

  $result = mysqli_query($link, $sql);
  
  if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
}

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

  <!-- Texto e outros -->
  <p> Projeto</p>

  <form action="/dosos/NavBar/PedirProjeto.php" method="POST">
    <p>
      <label> descricao </label>
      <textarea name="descricao"></textarea>
    </p><br>
    <p>
    <label for="estudante">Numero estudante</label>
      <input type="number" name="id_aluno">
    </p></br>
  <input type="submit" value="Submit">
  </form> 

<table>
    
</table>

<!-- Footer -->
<?php footer(); ?>

</body>
</html>