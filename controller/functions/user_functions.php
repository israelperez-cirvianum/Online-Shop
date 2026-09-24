<?php

    function exists_user(string $username, array $user_list){
        foreach($user_list as $key => $user){
            if($user['username'] == $username){
                return $user;
            }
        }
        return null;
    }

?>