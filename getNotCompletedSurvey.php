<?php
    require 'Sondage.php';
    require 'Question.php';
    require 'Reponse.php';
    session_start();
    $_SESSION['sondageId'] = $_POST['id'];
    $sondage = new Sondage();
    $question = new Question();
    $sondage->setId($_POST['id']);
    $result = $sondage->getSurveyQuestions();

    for( $i = 0; $i < sizeof($result); $i++ ){
        $question->setIdQ($result[$i][0]);
        $result[$i][3] = $question->getReponses();
    }
    echo json_encode($result);
