<?php
//nome do servidor e do user name(neste caso sao os mesmos)
$server_name = "2022_DSOS_G2";
$user_name = "2022_DSOS_G2";

//password da connecão
$password = "Er5ohRSHiLqLFf#";

$database_name = "ficha7";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password, $database_name);

// Checking the  connection
if (!$connection) {
    die("Failed " . mysqli_connect_error());
}
echo "Connection established successfully";
?>