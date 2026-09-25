<?php

    define("LANG_CONFIG", "ca");
    define("REGEX_PASSWORD", "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$/");
    define("REGEX_EMAIL", "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/");
    $_SESSION['REGEX_PASSWORD'] = REGEX_PASSWORD;
    $_SESSION['REGEX_EMAIL'] = REGEX_EMAIL;
    $_SESSION["LANG_CONFIG"] = LANG_CONFIG;

?>