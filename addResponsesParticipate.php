<?php
require 'Sondage.php';
session_start();
    $sondage = new Sondage();
    $sondage->setId($_POST['id']);
    $id_q = (int)$_POST['questionId'];
    $id_r = isset($_POST['responseId'])?(int)$_POST['responseId']:null;
    $other = isset($_POST['other']) ? $_POST['other'] : null;
    $sondage->addSurveyResponses($id_q,$id_r,$_SESSION['id'],$other);
