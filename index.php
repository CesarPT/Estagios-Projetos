<!--Conexão BD-->
<?php include_once("connectbd.php");
session_start();
?>

<!doctype html>
<html lang="pt">

<head>
  <title>DSOS - Gestão de Projetos/Estágios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS e Bootstrap -->
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Logotipo -->
  <a class="navbar-brand" href="index.php">
    <img src="Imagens/logo.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav d-flex flex-row">
    <li class="nav-item p-2">
      <a class="nav-link text-white" href="index.php">Home</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="responsavel.php">Responsável</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="docente.php">Docente</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="empresa.php">Empresa</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link disabled text-secondary" href="aluno.php">Aluno</a>
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
          $_SESSION['user_name'];
          ?>
        </p>
    </li>
  </ul>

</nav>


  <!-- Texto e outros -->
  <h4 class="text-center">Bem vindo!</h4>
  <h5 class="text-center">Para começar, clique no botão <b>Registrar</b>.</</h5>
  <h5 class="text-center">Se já tiver uma conta, para ter acesso à sua área, clique no botão <b>Login</b>.</h5>

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
          <!-- Conteúdo -->
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
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contatos</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
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