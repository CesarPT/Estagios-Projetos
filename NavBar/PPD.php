<?php
 include_once("../ConnectionBD/connectbd.php");
 session_start(); 

 //if ($_SESSION["tipo_user"] != 'D') {
 // header('Location: ../Errors/RestrictPage.php');
 // exit();
//}
 function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$id_professor=$_SESSION['id'];
if (isset($_POST['descricao'])) {

  $descricao = validate($_POST['descricao']);

  $id_user = $id_professor;


  //Query para insert
  $sql = "INSERT INTO Projeto (descricao,id_professor)
  VALUES ('$descricao','$id_user')";

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
  <title>Pedir Projeto</title>
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
  <h1> Propostas de projeto</h1>

  <form action="/dosos/NavBar/PPD.php" method="POST">
    <p>
      <label> descricao </label>
      <textarea name="descricao"></textarea>
    </p><br>
    <!--
    <p>
   <label for="estudante">Numero estudante</label>
      <input type="number" name="id_user">
    </p></br>
    -->
  <input type="submit" value="Submit">
  </form> 

<table>
    
</table>

<!-- Footer -->
<?php footer(); ?>

</body>
</html>