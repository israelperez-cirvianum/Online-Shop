<?php
    include('./templates/header.php');
    include('./templates/navbar_debug.php');
    $text = $_SESSION['text'];
?>

<form action="../controller/login_controller.php" method="post">

    <div class="name">
        <label for="name"><?= $text["name"] ?></label>
        <input type="text" id="name" name="nameField">
    </div>

    <div class="username">
        <label for="username"><?= $text["username"] ?></label>
        <input type="text" id="username" name="usernameField">
    </div>

    <div class="email">
        <label for="email"><?= $text["email"] ?></label>
        <input type="email" id="email" name="emailField">
    </div>

    <div class="password">
        <label for="password"><?= $text["password"] ?></label>
        <input type="password" id="password" name="passwordField">
        <label for="password"><?= $text["repeat_pass"] ?></label>
        <input type="password" id="repeat_password" name="repeat_pass_field">
    </div>

    

    <div>
        <button type="submit"><?= $text["login"] ?></button>
        <button href="#"><?= $text["singup"] ?></button>
    </div>