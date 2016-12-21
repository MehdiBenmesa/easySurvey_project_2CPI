<?php
include_once "User.php";

if($_SESSION['type']=='admin' && $_SESSION['login']==true && $_POST['id']){
    $user = new User();
    $user->delete($_POST['id']);
    echo "true";
}else{
    header("location:userlogin.php");
}