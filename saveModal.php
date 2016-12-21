<?php
    require "Sondage.php";
    $sondage = new Sondage();
    $sondage->setId($_POST['id']);
    $sondage->setModal();