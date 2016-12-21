<?php
require_once "Question.php";
require_once "Reponse.php";
 //$question = $_POST['question'];*/
 session_start();
 $question = new Question();
 $question->setQuestion($_POST['question']);
 $question->setType($_POST['type']);
 $question->setOriginal($_POST['original']);
 $question->addQuestion();
 $reponse = new Reponse();
 $tmp = json_decode($_POST['jsondata']);
 $id = $question->getIdQ();
 for($i = 0; $i < sizeof($tmp); $i++){

     $reponse->setReponse($tmp[$i]);
     $reponse->addReponse($id);

 }
 $question->addToSurvey($_SESSION['sondageId']);
 echo $id;