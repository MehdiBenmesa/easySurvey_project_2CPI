<?php
    require 'User.php';
    $user = new User();
    echo json_encode($user->getSurveysInfo($_SESSION['id']));