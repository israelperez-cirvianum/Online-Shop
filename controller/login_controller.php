<?php
    session_start();
    $_SESSION['login_error'] = false;
    $_SESSION['actual_user'] = null;
    require_once './functions/user_functions.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST["username_field"])){
            $user_aux = exists_user($_POST['username_field'], $_SESSION['users']);

            if($user_aux != null){
                if(password_verify($_POST['password_field'], $user_aux['password'])){
                    $_SESSION['actual_user'] = $user_aux;
                    header('Location: ../view/home.php');
                    exit;
                }
            }
            
            $_SESSION['login_error'] = true;
            header('Location: ../view/login.php');
            
        }
    }
?>