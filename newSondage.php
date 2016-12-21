<?php
session_start();
 if( $_SESSION['login'] != true) {
     echo "false";
 }else {
     require_once "Sondage.php";
     $sondage = new Sondage();
     $sondage->setNomSondage($_POST['nomSondage']);
     $sondage->setDescription($_POST['description']);
     $sondage->setOption($_POST['option']);
     $sondage->setTime(date('Y-m-d H:i:s', strtotime($_POST['fin'])));
     $sondage->setList(implode(',',$_POST['list']));
     if (!empty($sondage)) {
         if($sondage->addSondage($_SESSION['id'])) {
             $_SESSION['sondageId'] = $sondage->getId();
             echo $_SESSION['sondageId'];
         }
         else
             echo 'false';
     }

 }
