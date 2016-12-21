<?php

    require 'Notification.php';
    session_start();
    echo json_encode(Notification::getNotifications($_SESSION['id']));