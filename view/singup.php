<?php
    include('./templates/header.php');
    include('./templates/navbar_debug.php');
    $text = $_SESSION['text'];
?>

<form action="../controller/singup_controller.php" method="post">

    <div class="name">
        <label for="name"><?= $text["name"] ?></label>
        <input type="text" id="name" name="name_field">
    </div>

    <div class="username">
        <label for="username"><?= $text["username"] ?></label>
        <input type="text" id="username" name="username_field">
    </div>

    <div class="email">
        <label for="email"><?= $text["email"] ?></label>
        <input type="email" id="email" name="email_field">
    </div>

    <div class="password">
        <label for="password"><?= $text["password"] ?></label>
        <input type="password" id="password" name="password_field">
        <label for="password"><?= $text["repeat_pass"] ?></label>
        <input type="password" id="repeat_password" name="repeat_pass_field">
    </div>

    <div>
        <button type="submit"><?= $text["singup"] ?></button>
        <button href="#"><?= $text["cancel"] ?></button>
    </div>

</form>

<?php 
    if(!empty($_SESSION['singup_error'])){
        if($_SESSION['singup_error'] == 1){ // duplicated username
            echo $text['singup_error_duplicated_username'];
        }
        else if($_SESSION['singup_error'] == 2){ // email not valid
            echo $text['singup_error_email_not_valid'];
        }
        else if($_SESSION['singup_error'] == 3){ // password not valid
            echo $text['singup_error_pass_not_valid'];
        }
        else if($_SESSION['singup_error'] == 4){ // passwords not equal
            echo $text['singup_error_pass_not_match'];
        }
        unset($_SESSION['singup_error']);
    }
?>

<?php
    include('./templates/footer.php');
?>