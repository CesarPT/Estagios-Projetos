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


  //secho "----".$password;




  if (empty($name)) {
      header("Location: login.php?error=User Name is requierd");
      //exit();
  } elseif (empty($password)) {
      header("Location login.php?error=Password is requierd");
      //exit();
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

  <!-- Texto e outros -->
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
</form>

<!-- Footer -->
<?php footer(); ?>

</body>