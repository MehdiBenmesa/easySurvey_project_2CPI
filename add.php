<?php
include_once "User.php";

if($_SESSION['type']=='admin' && $_SESSION['login']==true){
    if($_POST['type']!='etudiant')$_POST['year']=0;
        $user = new User();
        $user->registre($_POST['name'], $_POST['password'], $_POST['email'], $_POST['type'], $_POST['year']);
        echo "true";
}else{

    header("location:userlogin.php");
}