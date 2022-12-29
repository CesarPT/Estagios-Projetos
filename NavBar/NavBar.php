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

<?php
function navbar() { 
?>
    <nav class="navbar navbar-expand-sm bg-dark">

  <!-- Logotipo -->
  <a class="navbar-brand" href="index.php">
    <img src="../Imagens/logo.jpg" alt="logo" style="width:40px;">
  </a>

  <ul class="navbar-nav d-flex flex-row">
      <li class="nav-item p-2">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
<?php
if(empty($_SESSION['tipo_user'])) :
?>     
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
        <a class="nav-link" href="areapessoal.php">
          <button class="btn btn-light">Área pessoal</button>
        </a>
      </li>

<!-- Login: Aluno (Desativa o aluno) -->
<?php elseif($_SESSION['tipo_user'] == 'A') : ?>
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
        <a class="nav-link text-white" href="Aluno.php">Aluno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="areapessoal.php">
          <button class="btn btn-light">Área pessoal</button>
        </a>
      </li>

<!-- Login: Empresa (Desativa a empresa) -->
<?php elseif($_SESSION['tipo_user'] == 'E') : ?>
  <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Responsavel.php">Responsável</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Docente.php">Docente</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link text-white" href="Empresa.php">Empresa</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Aluno.php">Aluno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="areapessoal.php">
          <button class="btn btn-light">Área pessoal</button>
        </a>
      </li>

<!-- Login: Empresa (Desativa a empresa) -->
<?php elseif($_SESSION['tipo_user'] == 'D') : ?>
  <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Responsavel.php">Responsável</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link text-white" href="Docente.php">Docente</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Empresa.php">Empresa</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link disabled text-secondary" href="Aluno.php">Aluno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="areapessoal.php">
          <button class="btn btn-light">Área pessoal</button>
        </a>
      </li>

<!-- Login: Empresa (Desativa a empresa) -->
<?php elseif($_SESSION['tipo_user'] == 'R') : ?>
  <li class="nav-item p-2">
        <a class="nav-link text-white" href="Responsavel.php">Responsável</a>
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
        <a class="nav-link" href="areapessoal.php">
          <button class="btn btn-light">Área pessoal</button>
        </a>
      </li>

<?php endif; ?>

    <li class="nav-item">
        <p class="p-3 mb-2 bg-dark text-white" class="text-light">
          Utilizador: <?php
            if (empty($_SESSION['username'])) {
              //Se não tiver feito login
              echo 'Faça login';
            } else {
              //Login: Mostra o username
              echo $_SESSION['username'];
            }
          ?>
        </p>
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
        <a class="nav-link" href="#">
        <button id="logout" class="btn btn-danger">Logout</button>
        </a>
    </li>
    </ul>
  </nav>
  

<!-- Fechar função -->
<?php } ?>
</html>