<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start(); 
require 'NavBar.php';
require 'Footer.php';

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['name']) && isset($_POST['password'])) {

  $name = validate($_POST['name']);
  $password = validate($_POST['password']);



  if (empty($name)) {
      header("Location: login.php?error=User Name is requierd");
      //exit();
  } elseif (empty($password)) {
      header("Location login.php?error=Password is requierd");
      //exit();
  }

  $errors = array();
  $password_1 = mysqli_real_escape_string($link, $_POST['password']);
  if (count($errors) == 0) {
  	$password = md5($password_1);
  }

  $sql = "Select * FROM Utilizador Where nome='$name' and password='$password'";

  $result = mysqli_query($link, $sql);

  if (mysqli_num_rows($result) == 1) {
      //Login correto
      $_SESSION['username']=$name;
      $_SESSION['tipo_user']=$tipo_user;

      //header("Location:index.php");
      $row = mysqli_fetch_assoc($result);
      if ($row['nome'] == $name && $row['password'] == $password) {
          $_SESSION['nome'] = $row['nome'];
          $_SESSION['id'] = $row['id'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['tipo_user'] = $row['tipo_user'];
          $_SESSION['telemovel'] = $row['telemovel'];
          //echo "sd,jkgfsdk.jfasdçkj";
          header("Location: index.php");
          exit();
      } else {
          header("Location: login.php?error=incorrer username or password");
          exit();
      }
  } else {
      header("Location: login.php");
  }
}


?>

<!DOCTYPE html>
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

  <!-- Texto e outros ////////////////////////////////////////////////////////// -->
  <form action="login.php" method="post">
<h1 class="text-center">Login</h1>
<?php if (isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error'] ?></p>
<?php } ?>

    <p class="text-center">
        <label for="name">Username:</label>
        <input type="text" name="name">
    </p>
    <p class="text-center">
        <label class="text-center" for="pass">Password:</label>
        <input type="password" name="password">
    </p>
    <div class="col-md-12 text-center">
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
    <div class="col-md-12 text-center">
        <button type="button" onclick="recuperarSenha()">É empresa? - Recuperar senha</button>
    </div>
</form>

<div id="info" class="d-flex justify-content-center"></div>

<script>

function recuperarSenha() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("info").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../PHP/Empresa/RecuperarSenha.php", true);
  xhttp.send();
}

</script>


<!-- Estes POST vem do RecuperarSenha.php -->
<?php
if(isset($_POST['submitSenha'])){
  
  $email = $_POST['email'];
  $password = $_POST['senha'];
  $chave = $_POST['chave'];
  $chaveAdmin = "DSOS";

  $sql = "Update Utilizador SET password='$password' WHERE email='$email'";

  //Verificação de email se é de uma empresa
  $query = mysqli_query($link, "Select * FROM Utilizador WHERE email='$email' AND tipo_user='E'");

  if(mysqli_num_rows($query) <= 0){
    echo '<script>alert("Não foi encontrado esse email de empresa.")</script>';
  } else if (!($chave == $chaveAdmin)) {
    echo '<script>alert("INFO: Chave de segurança incorreta. Contate o Administrador.")</script>';
  } else if (!preg_match_all('"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,20}$"', $password)){
    echo '<script>alert("INFO: A senha tem que ter no mínimo 6 e máximo 20 caracteres (com: letras minusculas, maisculas e números no mínimo)!")</script>';
 } else if(mysqli_query($link, $sql)){
    echo '<script>alert("INFO: Senha alterada com sucesso!")</script>';
  } else {
    echo '<script>alert("ERRO: Não foi possível atualizar a sua senha.")</script>';
  }
}
?>

<!-- Footer -->
<?php footer(); ?>

</body>
</html>