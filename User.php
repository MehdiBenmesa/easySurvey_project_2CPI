<?php
session_start();
class User
{
    public $pdo;
    function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function editPass($id, $pass){
        $stm = $this->pdo->prepare("update users set password = :p WHERE id = :i");
        $stm->bindValue(':p',$pass,PDO::PARAM_STR);
        $stm->bindValue(':i',$id,PDO::PARAM_INT);
        $stm->execute();
    }
    function login($name_mail, $password)
    {

        $result = $this->pdo->prepare("select id,type,name,email from users where (name =? or email =?) and password =?");
        $result->execute(array($name_mail,$name_mail,$password));
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        if ($row) {
               // session_start();
                $_SESSION['type'] = $row['type'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                //send him to it's pages;
        }
        else {
            echo 'non';
        }
    }

    function registre($name, $password, $email, $type, $year)
    {
            $result = $this->pdo->prepare("select id from users where name =? or email=?");
            $result->execute(array($name, $email));

            if ($result->rowCount() == 0) {

                $this->pdo->query("insert into users(name, password, email, type, year) values ('$name', '$password','$email','$type','$year')");
                $stm = $this->pdo->query("select id,name,type,name,email from users  where name = '$name'");
                $stm->setFetchMode(PDO::FETCH_ASSOC);
                $row = $stm->fetch();
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['type'] = $row['type'];
                $_SESSION['login'] = true;
                $_SESSION['email'] = $row['email'];

                echo $_SESSION['type'];


            } else {

                echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                    <i class='icon-remove'></i>
                    </button>
                    <strong>Erreur</strong> Changer le nom d'utilisateur .</div>
                     <script>
                    $(document).ready(function(){
                        $('#name').css('background-color','#FF6B67');
                    });

                    </script>";
            }
    }
    function delete($id){
        $this->pdo->query("delete from users where id='$id'");
    }
    function edit($id, $name, $password, $email, $type, $year){
        $this->pdo->query("update users set name ='$name', password='$password', email ='$email', type ='$type', year = '$year' where id='$id'");
    }

    function getSurveysInfo($id){
        $result = array();
        $stm = $this->pdo->query("select id_s,module,description,fin,nom_sondage,state,nb_p from surveys where id ='$id'");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        while($q = $stm->fetch()){
            $result[] = array($q['id_s'],$q['nom_sondage'],$q['module'],$q['description'],date('d/m/y',strtotime($q['fin'])),$q['state'],$q['nb_p']);
        }
        return $result;
    }
}

