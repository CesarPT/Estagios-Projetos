<?php
 include_once("../ConnectionBD/connectbd.php");
<<<<<<< HEAD
 session_start(); 

 function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['descricao']) && isset($_POST['empresa']) && isset($_POST['local'])) {

  $descricao = validate($_POST['descricao']);
  $empresa = validate($_POST['empresa']);
  $local = validate($_POST['local']);


  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('$descricao', '$empresa', '$local')";

  $result = mysqli_query($link, $sql);
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
=======
 require 'NavBar.php';
 require 'Footer.php';
>>>>>>> 3460ef8f748dc050c61a9f033d5e7384556f3dcc
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

  <form action="/dosos/NavBar/PedirProposta.php" method="POST">
    <p>
      <textarea name="descricao"></textarea>
    </p><br>
    <p>
      <label for="empresa">Empresa</label><br>
      <input type="text" name="empresa">
    </p><br>
    <p>
      <label for="local">Local</label><br>
      <input type="text" name="local">
    </p><br>
  <input type="submit" value="Submit">
  </form> 

<table>
    
</table>

<!-- Footer -->
<?php footer(); ?>

</body>
</html>