
<!--Conexão BD-->
<?php include('regauth.php') ?>
<?php include_once("../ConnectionBD/connectbd.php");

require 'NavBar.php';
require 'Footer.php';?>

<!doctype html>
<html lang="pt">

<head>
  <title>Gestão de Projetos/Estágios</title>
  <link rel="icon" href="../Imagens/logo.jpg">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS e Bootstrap -->
  <link rel="stylesheet" href="/CSS/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<body>

<!-- NavBar para verificar qual o tipo_user e receber as permissões -->
<?php navbar(); ?>

  <!-- Texto e outros -->
  <form method="post" action="registrar.php">
  	<?php include('errors.php'); ?>
  	
  	  <label>Nome</label>
  	  <input type="text" name="nome" value="<?php echo $nome; ?>">
  	
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	
      
  	  <label>Telemovel</label>
  	  <input type="text" name="telemovel" value="<?php echo $telemovel; ?>">
  
  
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  
  	
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">

        <label>Tipo de Utilizador</label>
        <select name="tipo_user">
                    <option value=""></option>
                    <option value="A">Aluno</option>
                    <option value="E">Empresa</option>
                    <option value="D">Docente</option>
                    <option value="R">Responsavel</option>
                </select>
 
  	
  	  <button type="submit" class="btn" name="reg_user">Registar</button>

  	<p>
  		Já registrado? <a href="login.php">Entre aqui</a>
  	</p>
  </form>

<!-- Footer -->
<?php footer(); ?>

</body>

</html>

