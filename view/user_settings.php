<?php
    include('./templates/header.php');
    include('./templates/navbar.php');
    $text = $_SESSION['text'];
?>

<div>
    <h1><?= $text['settings'] ?></h1>
    <div class="credentials">
        <h2><?= $text['user_information'] ?></h2>
        <form>
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
        <button type="submit"><?= $text["save_changes"] ?></button>
        <button href="#"><?= $text["exit"] ?></button>
    </div>
        </form>
    </div>
</div>