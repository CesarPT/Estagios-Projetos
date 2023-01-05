<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start();
require 'NavBar.php';
require 'Footer.php';

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
  <h4 class="text-center">Bem vindo - Empresa</h4>

    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    Número
                  </th>
                  <th>
                    Descrição
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                  <button type="button" onclick="alterarDados()">Alterar dados</button>
                  </td>
                </tr>
                <tr class="table-active">
                  <td>
                    2
                  </td>
                  <td>
                    Formalizar pedidos de estágio
                  </td>
                </tr>
                <tr class="table-success">
                  <td>
                    3
                  </td>
                  <td>
                    Consultar email e nome dos alunos candidatos
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="info" class="col-md-12">
            <br><br>
            <h5>
              Informações:
            </h5>
            <p>
              Clique no item em cima que deseja visualizar. <br><strong>Irá aparecer em baixo todas as informações</strong>.
            </p>
          </div>
        </div>
      </div>
  </div>

<!-- AJAX + PHP -->
<script>

  function alterarDados() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("info").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "../PHP/Empresa/AlterarDados.php", true);
    xhttp.send();
  }


</script>

<!-- Estes POST vem do AlterarDados.php -->
<?php
if(isset($_POST['submitEmail'])){
  $email = $_POST['email'];

  $nome=$_SESSION['username'];
  $sql = "Update Utilizador SET email='$email' WHERE nome='$nome'";

     //Email já contem verificações feitas no type="email" por padrão
    if(mysqli_query($link, $sql)){
    echo '<script>alert("INFO: Email alterado com sucesso!")</script>';
  } else {
    echo '<script>alert("ERRO: Não foi possível atualizar o email.")</script>';
  }
}


if(isset($_POST['submitNome'])){
  $username = $_POST['nome'];

  $nome=$_SESSION['username'];
  $sql = "Update Utilizador SET nome='$username' WHERE nome='$nome'";

     //Referência: https://stackoverflow.com/questions/12018245/regular-expression-to-validate-username
    if (!preg_match_all('"^(?=.{5,30}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$"', $username)){
      /*                   └─────┬────┘└───┬──┘└─────┬─────┘└─────┬─────┘ └───┬───┘
       │         │         │            │           no _ or . at the end
       │         │         │            │
       │         │         │            allowed characters
       │         │         │
       │         │         no __ or _. or ._ or .. inside
       │         │
       │         no _ or . at the beginning
       |       username tem que ter entre 5-30 characters long
      */
     echo '<script>alert("INFO: O nome tem que ter no mínimo 5 caracteres, máximo 30 (Pode conter: letras minúsculas, maisculas, números, _ - .)")</script>';
  } else if(mysqli_query($link, $sql)){
    echo '<script>alert("INFO: Nome alterado com sucesso!")</script>';
    echo '<script>alert("INFO: Recomendamos que faça login novamente.")</script>';
    //Atualizar username no navegador
    $_SESSION['username']=$username;
  } else {
    echo '<script>alert("ERRO: Não foi possível atualizar o nome.")</script>';
  }
}

if(isset($_POST['submitSenha'])){
     $senha = $_POST['senha'];

     $nome=$_SESSION['username'];
     $sql = "Update Utilizador SET password='$senha' WHERE nome='$nome'";

        //Verificar se senha tem:
        //(?=.*\d) - qualquer numero
        //(?=.*[A-Za-z]) - pelo menos 1 letra maiuscula e minuscula
       if (!preg_match_all('"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,20}$"', $senha)){
        echo '<script>alert("INFO: A senha tem que ter no mínimo 6 e máximo 20 caracteres (com: letras minusculas, maisculas e números no mínimo)!")</script>';
     } else if(mysqli_query($link, $sql)){
       echo '<script>alert("INFO: Senha alterada com sucesso!")</script>';
       echo '<script>alert("INFO: Recomendamos que faça login novamente.")</script>';
     } else {
       echo '<script>alert("ERRO: Não foi possível atualizar a senha.")</script>';
     }
}

  if(isset($_POST['submitTelemovel'])){
  $telemovel = $_POST['telemovel'];

  $nome=$_SESSION['username'];
  $sql = "Update Utilizador SET telemovel='$telemovel' WHERE nome='$nome'";

     //Verificar se senha tem:
     //^\\d{9}$ - qualquer numero de 9 digitos
    if (!preg_match_all('"^\\d{9}$"', $telemovel)){
     echo '<script>alert("INFO: O telemovel tem que ter 9 números.")</script>';
  } else if(mysqli_query($link, $sql)){
    echo '<script>alert("INFO: Nº Telemovel alterado com sucesso!")</script>';
    echo '<script>alert("INFO: Recomendamos que faça login novamente.")</script>';
    $_SESSION['telemovel']=$telemovel;
  } else {
    echo '<script>alert("ERRO: Não foi possível atualizar o nº telemovel.")</script>';
  }

?>

<!-- Footer -->
<?php footer(); ?>

</body>

</html>