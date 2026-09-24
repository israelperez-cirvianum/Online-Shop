<?php
    session_start();
    $_SESSION['login_error'] = false;
    require_once './functions/user_functions.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST["usernameField"])){
            $user_aux = exists_user($_POST['usernameField'], $_SESSION['users']);


            if($user_aux != null){
                if(password_verify($_POST['passwordField'], $user_aux['password'])){
                    
                    header('Location: ../view/home.php');
                    exit;
                }
            }
            
            $_SESSION['login_error'] = true;
            header('Location: ../view/login.php');
            
        }
    }
?>