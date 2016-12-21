<?php
    require 'Sondage.php';
    require 'Notification.php';
    session_start();
    $sondage = new Sondage();
    $sondage->setId($_SESSION['sondageId']);
    $sondage->endCreation();
    $list = $sondage->getList();
    Notification::sendNotifications($list,$sondage->getId());
    echo "true";
