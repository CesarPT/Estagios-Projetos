<?php
//nome do servidor e do user name(neste caso sao os mesmos)
$server_name = "ctesp.dei.isep.ipp.pt";
$user_name = "2022_DSOS_G2";

//password da connecão
$password = "Er5ohRSHiLqLFf#";

$database_name = "2022_DSOS_G2";

// Creating the connection by specifying the connection details
$link = mysqli_connect($server_name, $user_name, $password, $database_name);





//mysqli_close($connection);
?>