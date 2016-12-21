<?php
    require 'Question.php';
    echo json_encode(Question::getQuestionsForBank($_POST['type']));