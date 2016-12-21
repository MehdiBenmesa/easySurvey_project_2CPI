<?php
require "Question.php";
session_start();
    $question = new Question();
    $question->setIdQ($_POST['idQuestion']);
    $question->removeFromSurvey($_SESSION['sondageId']);
echo "Cette question à ete annulée";