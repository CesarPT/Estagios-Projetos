<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start();


// Inicializar variáveis
$email = "";
$nome = "";
$telemovel = "";
$errors = array(); 

// connect to the database
//$link = mysqli_connect('ctesp.dei.isep.ipp.pt', '2022_DSOS_G2', 'Er5ohRSHiLqLFf#', '2022_DSOS_G2');
// Registar utilizador
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($link, $_POST['nome']);
  $telemovel = mysqli_real_escape_string($link, $_POST['telemovel']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $tipo_user = mysqli_real_escape_string($link, $_POST['tipo_user']);
  $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

  // validaçao do formulário: assegura que o formulário está correctamente preenchido
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nome)) { array_push($errors, "Nome / username requerido"); }
  if (empty($telemovel)) { array_push($errors, "Telemovel requerido"); }
  if (empty($email)) { array_push($errors, "Email requerido"); }
  if (empty($tipo_user)) { array_push($errors, "Tipo de Utilizador requerido"); }
  if (empty($password_1)) { array_push($errors, "Password requerida"); }
  if ($password_1 != $password_2) {
	array_push($errors, "As passwords não são iguais");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Utilizador WHERE nome='$nome' or email='$email' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['nome'] === $nome) {
      array_push($errors, "Username já existe");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email já existe");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Utilizador (nome,password, email, telemovel, tipo_user)
  			  VALUES ('$nome', '$password', '$email', '$telemovel', '$tipo_user')";
  	mysqli_query($link, $query);
  	$_SESSION['nome'] = $nome;
  	$_SESSION['success'] = "Entrou com sucesso";
  	header('location: index.php');
  }
}
