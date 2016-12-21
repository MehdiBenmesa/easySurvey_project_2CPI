<?php
    require 'User.php';
    $user = new User();
    $user->editPass($_SESSION['id'],$_POST['pass']);
    echo 'true';