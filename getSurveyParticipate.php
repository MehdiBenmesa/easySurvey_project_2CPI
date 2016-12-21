<?php
require 'Sondage.php';
require 'Question.php';
$sondage = new Sondage();
$sondage->setId($_POST['id']);
$questions = $sondage->getSurveyQuestions();
for($i= 0; $i < sizeof($questions); $i++){
    $questions[$i][3]= array();
    $question = new Question();
    $question->setIdQ($questions[$i][0]);
    $questions[$i][3] = $question->getReponsesIds();
}
echo json_encode($questions);