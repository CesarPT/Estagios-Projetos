<?php
    session_start();
    //Limpar o username
    unset($_SESSION['username']);
    //Atualizar o index
    header('Location: index.php'); 
?>