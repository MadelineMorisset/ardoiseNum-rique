<?php
session_start();

    // Déconnexion 
    $_SESSION = [];
    session_destroy();

    header("Location: ./index.php");
?>