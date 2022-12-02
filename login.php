<?php include_once("connectbd.php") ?>
<!--
<?php include_once("insert.php")?>
-->

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Login</title>
<style>

</style>
<head>

</head>

<body>
<?php


if(isset($_POST['name'])){
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);

// Attempt insert query execution
$sql = "Select nome,password from Utilizador where nome='$name' and password='$pass'";
if(mysqli_query($link, $sql )){
    echo "encontrou.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>

    <h1>Login</h1>

<form action="" method="post" id="loginform">
    <p>
        <label for="name">Username:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass">
    </p>
</form>
<button type="submit" form="loginform" value="Submit">Enviar</button>

</body>