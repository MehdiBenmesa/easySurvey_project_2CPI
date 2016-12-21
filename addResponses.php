<?php
    require 'Sondage.php';
    $sondage = new Sondage();
    $sondage->setId(137);
    $id_q = (int)$_POST['questionId'];
    $id_r = isset($_POST['responseId'])?(int)$_POST['responseId']:null;
    $other = isset($_POST['other']) ? $_POST['other'] : null;
    $sondage->addSurveyResponses($id_q,$id_r,(int)52,$other);
