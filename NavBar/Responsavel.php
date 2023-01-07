<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start();
require 'NavBar.php';
require 'Footer.php';

if($_SESSION["tipo_user"]!='R'){
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
   <h4 class="text-center">Bem vindo - Responsável</h4>

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
              <button type="button" onclick="importarCSV()">Importar alunos (Formato: CSV)</button>
              </td>
            </tr>
            <tr class="table-active">
              <td>
                2
              </td>
              <td>
                ------
              </td>
            </tr>
            <tr class="table-success">
              <td>
                3
              </td>
              <td>
              ------
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
  function importarCSV() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("info").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "../PHP/Responsavel/ImportarCSV.php", true);
    xhttp.send();
  }
</script>


<?php
  if (isset($_POST["import"])){
    
      $fileName = $_FILES["file"]["tmp_name"];

      if($_FILES["file"]["size"] > 0){
        $file = fopen($fileName, "r");
      while(($column = fgetcsv($file, 10000, ",")) !== FALSE){
        $sqlInsert = "Insert into Utilizador (nome, password, email, telemovel, tipo_user) values 
        ('".$column[0]." ', '".$column[1]." ', '".$column[2]." ', ".$column[3].", '".$column[4]." ')";
        $result = mysqli_query($link, $sqlInsert);
                        
        if (!empty($result)){
            echo 'Os dados foram inseridos na base de dados com sucesso!';
        } else {
             echo "Erro: Não foi possível importar para a base de dados.";
        }
      }
    }
  }
?>

<!-- Footer -->
<?php footer(); ?>

</body>

</html>