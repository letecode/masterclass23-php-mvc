<?php

    require_once('auth.php');

    $user = null;
    if(getUser()) {
        $user = getUser();
    } else {
        header('Location: ../index.php');
    }
?>