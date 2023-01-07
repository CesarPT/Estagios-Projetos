<?php
 include_once("../ConnectionBD/connectbd.php");
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Aluno</title>
</head>

<html lang="pt">

<head>
  <title>Gestão de Projetos</title>
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
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Logotipo -->
  <a class="navbar-brand" href="index.php">
    <img src="../Imagens/logo.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav d-flex flex-row">
    <li class="nav-item p-2">
      <a class="nav-link text-white" href="index.php">Home</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="Responsavel.php">Responsável</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="Docente.php">Docente</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="Empresa.php">Empresa</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="Aluno.php">Aluno</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registrar.php">
        <button class="btn btn-secondary">Registrar</button>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">
        <button class="btn btn-primary">Login</button>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="areapessoal.php">
        <button class="btn btn-light">Área pessoal</button>
      </a>
    </li>
    <li class="nav-item">
        <p class="p-3 mb-2 bg-dark text-white" class="text-light">
          Utilizador: <?php
            if (empty($_SESSION['username'])) {
              //Se não tiver feito login
              echo 'Faça login';
            } else {
              //Mostra o username
              echo $_SESSION['username'];
            }
          ?>
        </p>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <button id="logout" class="btn btn-danger">Logout</button>
      </a>
    </li>
  </ul>

</nav>


  <!-- Texto e outros -->
  <h1>Propostas de projeto</h1>

<?php

$id_aluno=$_SESSION['id'];

$sql = "SELECT Projeto.descricao,Projeto.estado,Utilizador.nome
from Projeto INNER JOIN AlunoDocente 
On Projeto.id_aluno=AlunoDocente.id_aluno
Inner join Utilizador on
Utilizador.id=AlunoDocente.id_docente";

#get the result
$final = mysqli_query($link, $sql);

if (mysqli_num_rows($final) > 0) {
    echo 
    "<table><tr><th>Descrição</th>
    <th>Estado</th>
    <th>Aluno</th>
    <th>Docente</th>";

    //get the output of each row
    while ($i = mysqli_fetch_assoc($final)) {
        //get id and name columns
        echo "<tr><td>" . $i["descricao"] .
            "</td><td>" . $i["estado"] .
            "</td><td>" . $i["nome"] .
            "</td><td>" . $i["id_docente"] .
       "</td></tr>";
    }
  echo "</table>";
} else {
    echo "No results";
}
?>






<!-- Footer -->
<footer class="p-3 mb-2 bg-dark text-center text-lg-start bg-light text-muted">
  <section class="p-3 mb-2 bg-dark d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="section">
    <div class="text-white me-5 d-none d-lg-block">
      <h4>DSOS (Desenvolvimento de Software Orientado a Objetos) - Grupo 2 | 2022</h4>
    </div>
  </section>

  <section class="p-3 mb-2 bg-dark text-white">
    <div class="container text-center text-md-start mt-5">
      <!-- Criar coluna -->
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Membros do grupo:
          </h6>
          <p>César Guimarães - 1210522</p>
          <p>Daniel Lima - 12105<p>
          <p>Rodrigo Morais - 1210536<p>
        </div>

        <!-- Criar coluna -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Home
          </h6>
          <p>
            <a href="#!" class="text-reset">Registrar</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Fazer Login</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>

        <!-- Criar coluna -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Links úteis
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contatos</h6>
          <a href="mailto: 1210522@isep.ipp.pt">1210522@isep.ipp.pt</a>
          <br><br>
          <a href="mailto: 12105@isep.ipp.pt">12105@isep.ipp.pt</a>
          <br><br>
          <a href="mailto: 1210536@isep.ipp.pt">1210536@isep.ipp.pt</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Copyright/Referências -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://getbootstrap.com/">Bootstrap</a>
  </div>
</footer>
</body>
</html>