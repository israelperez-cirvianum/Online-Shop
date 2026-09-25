<?php
    session_start();
    /* header('Location: ./view/login.php'); */
    include('./config/config.php');
    include('./model/users.php');
    if($_SESSION['LANG_CONFIG'] == 'ca'){
        include('./config/languages/ca.php');
        $_SESSION['text'] = $text;
    }
    header('Location: ./view/login.php');
?>