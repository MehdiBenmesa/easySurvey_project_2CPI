<?php
    include_once "User.php";
    session_start();
    if($_SESSION['type'] == 'admin' && $_SESSION['login'] == true ){
        if($_POST['type']!='etudiant')$_POST['year']=0;
            $user = new User();
            $user->edit($_POST['id'], $_POST['name'], $_POST['password'], $_POST['email'], $_POST['type'], $_POST['year']);
            echo "true";
    }else{

        header("location: userlogin.php");

    }
