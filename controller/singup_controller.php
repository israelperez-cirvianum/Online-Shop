<?php
    session_start();
    require_once './functions/user_functions.php';
    require_once './user_controller.php';

    $_SESSION['singup_error'] = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username_field'])){
            $user_aux = exists_user($_POST['username_field'], $_SESSION['users']); // user_aux must be null to proceed. Error otherwise
            if($user_aux == null){ // username not exists
                if(valid_field($_POST['email_field'], $_SESSION['REGEX_EMAIL'])){ // validate email
                    if($_POST['password_field'] == $_POST['repeat_pass_field']){
                        if(valid_field($_POST['password_field'], $_SESSION['REGEX_PASSWORD'])){
                            $user_id = sizeof($_SESSION['users']);
                            $user_aux = user_builder($_POST['name_field'], $_POST['username_field'], $_POST['email_field'], $_POST['password_field'], 'user', $user_id);
                            add_user_to_list($user_aux, $_SESSION['users']);
                            header('Location: ../view/login.php');
                            exit;
                        }
                        $_SESSION['singup_error'] = 3; //password not accepted (regex)
                        header('Location: ../view/singup.php');
                        exit;
                    }
                    $_SESSION['singup_error'] = 4; //password not match 
                    header('Location: ../view/singup.php');
                    exit;
                }
                $_SESSION['singup_error'] = 2; //email not accepted (regex)
                header('Location: ../view/singup.php');
                exit;
            }
            $_SESSION['singup_error'] = 1; //duplicated username
            header('Location: ../view/singup.php');
            exit;
        }
    }
?>