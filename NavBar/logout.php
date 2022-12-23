<?php
    session_start();
    //Limpar o username
    session_destroy();
    //Atualizar o index
    header('Location: index.php'); 
?>