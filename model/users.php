<?php
    $users = [
        [
            "id" => 1,
            "name" => "Israel Pérez",
            "username" => "El Isr",
            "password" => password_hash("contrasenyaExemple1.", PASSWORD_DEFAULT),
            "email" => "israel.perez@cirvianum.cat",
            "role" => "administrator",
            "profileImage" => "default.png"
        ],
        [
            "id" => 2,
            "name" => "Ainhoa Pérez",
            "username" => "Sadica87",
            "password" => password_hash("contrasenyaExemple1.", PASSWORD_DEFAULT),
            "email" => "ainhoa.perez@cirvianum.cat",
            "role" => "user",
            "profileImage" => "default.png"
        ]
    ];

    $_SESSION['users'] = $users;
?>