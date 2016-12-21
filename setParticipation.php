<?php
    require 'Notification.php';
    require 'Sondage.php';
    session_start();
    $sondage = new Sondage();
    $sondage->setId($_POST['id']);
    $sondage->incrementParticipant();
    echo Notification::setParticipation($_SESSION['id'],$_POST['id']);