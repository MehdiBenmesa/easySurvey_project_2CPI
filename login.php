<?php
require_once "User.php";
try {
            $user = new User();
            $user->login($_POST['name_mail'], $_POST['password']);
            if (isset($_SESSION['login'])) {
                echo $_SESSION['type'];
            }


}
catch (Exception $e){
    echo $e->getMessage();
}
