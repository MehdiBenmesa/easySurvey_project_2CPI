<?php
    require 'Sondage.php';
    $sondage = new Sondage();
    $sondage->setId($_POST['id']);
    echo json_encode(array('name'=>$sondage->getNomSondage(),'fin'=>$sondage->getTime(),'module'=>$sondage->getOption(),'description'=>$sondage->getDescription(),'participants'=>$sondage->getParticipantNumbre()));