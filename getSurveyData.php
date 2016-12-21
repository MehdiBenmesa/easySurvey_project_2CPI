<?php
    require 'Sondage.php';
    require 'Question.php';
    require 'Reponse.php';
    $data = array();
    $questions = array();
    $sondage = new Sondage();
    $reponse = new Reponse();
    $sondage->setId($_POST['id']);
    $questions = $sondage->getSurveyQuestions();
    $question = new Question();
    $reponses = array();

    for($i = 0 ; $i < sizeof($questions) ; $i++) {

        $question->setIdQ($questions[$i][0]);
        $data[] = array($questions[$i][1],$questions[$i][2]);
        $reponses =  $question->getReponsesIds();

        for($j = 0 ; $j < sizeof($reponses); $j++){
            $reponse->setIdR($reponses[$j][0]);
            $data[$i][2][] = array($reponses[$j][1],$reponse->getFrequency($_POST['id'],$questions[$i][0]));
        }
        $data[$i][3] = $question->getOther($_POST['id']);
    }
echo json_encode($data);
