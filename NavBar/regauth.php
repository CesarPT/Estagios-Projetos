<!--Conexão BD-->
<?php include_once("../ConnectionBD/connectbd.php");
session_start();


// initializing variables
$email = "";
$nome = "";
$telemovel = "";
$errors = array(); 

// connect to the database
//$link = mysqli_connect('ctesp.dei.isep.ipp.pt', '2022_DSOS_G2', 'Er5ohRSHiLqLFf#', '2022_DSOS_G2');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($link, $_POST['nome']);
  $telemovel = mysqli_real_escape_string($link, $_POST['telemovel']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $tipo_user = mysqli_real_escape_string($link, $_POST['tipo_user']);
  $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nome)) { array_push($errors, "Nome is required"); }
  if (empty($telemovel)) { array_push($errors, "Telemovel is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($tipo_user)) { array_push($errors, "Tipo de Utilizador is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Utilizador WHERE email='$email' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Utilizador (nome,password, email, telemovel, tipo_user)
  			  VALUES ('$nome', '$password', '$email', '$telemovel', '$tipo_user')";
  	mysqli_query($link, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
