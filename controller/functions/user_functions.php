<?php

    function exists_user(string $username, array $user_list){
        foreach($user_list as $key => $user){
            if($user['username'] == $username){
                return $user;
            }
        }
        return null;
    }

    function valid_field(string $field, string $regular_expression){
        return preg_match($regular_expression, $field);
    }

    function user_builder(string $name, string $username, string $email, string $password, string $role, int $id){
        $user = [
            "id" => $id,
            "name" => $name,
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "email" => $email,
            "role" => $role,
            "profileImage" => "default.png"
        ];
        return $user;
    }

    function add_user_to_list(array $user, array &$user_list){
        array_push($user_list, $user);
    }


?>