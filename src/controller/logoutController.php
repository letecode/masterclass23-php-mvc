<?php

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        require_once('../models/auth.php');

        if(logout()) {
            header('Location: ../../index.php');
        } else {
            echo "error";
        }
    }
?>