<?php
    include('./templates/header.php');
    include('./templates/navbar_debug.php');
    $text = $_SESSION['text'];
?>

<form action="../controller/login_controller.php" method="post">
    <div class="username">
        <label for="username"><?= $text["username"] ?></label>
        <input type="text" id="username" name="usernameField">
    </div>

    <div class="password">
        <label for="password"><?= $text["password"] ?></label>
        <input type="password" id="password" name="passwordField">
    </div>

    <div>
        <button type="submit"><?= $text["login"] ?></button>
        <button  type="button" onclick="window.location.href='./singup.php'"><?= $text["singup"] ?></button>
    </div>

    <?php
        if(!empty($_SESSION['login_error'])){
            if($_SESSION['login_error'] ){
                echo $text['login_error'];
                $_SESSION['login_error'] = false;
            }
        }
        
    ?>
</form>