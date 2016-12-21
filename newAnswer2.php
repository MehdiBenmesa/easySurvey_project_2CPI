<?php
    session_start();
    require 'Question.php';
    $question = new Question();
    $question->setIdQ($_POST['id_q']);
    $question->addToSurvey($_SESSION['sondageId']);
    echo json_encode($question->getReponses());
