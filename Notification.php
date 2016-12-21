<?php

class Notification {


    public static function sendNotifications($list, $id_s){
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $list = explode(',', $list);
        $students = array();
        $emails = array();
        for($i = 0; $i < sizeof($list) ; $i++){
            $students[$i] = $pdo->query("select id,email from users where year = '$list[$i]' or type ='$list[$i]'")->fetchAll(PDO::FETCH_ASSOC);
        }

        for($i = 0 ; $i < sizeof($students); $i++){
            for($j = 0; $j < sizeof($students[$i]); $j++){
                $student = $students[$i][$j]['id'];
                $emails[]=$students[$i][$j]['email'];
                $stm =$pdo->prepare("insert into notifications (id_u, id_s)  values (:u,:s)");
                $stm->bindValue(':u',$student,PDO::PARAM_INT);
                $stm->bindValue(':s',$id_s,PDO::PARAM_INT);
                $stm->execute();

            }
        }

        /*$emails = implode(',',$emails);
        $subject = 'sondage';
        $message = 'Bonjour, Dans le cadre d evaluer le travail de notre ecole , et afin de l ameliorer, veuillez participez a ce sondage, Merci <a href='www.easysurvey.dz'></a>';
        mail($emails,$subject,$message);*/
    }


    public static function getNotifications($id_u){
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $stm = $pdo->query("select surveys.id_s, notifications.state, description, module, debut, fin, nom_sondage,name from notifications join surveys ON surveys.id_s = notifications.id_s join users on users.id = surveys.id where id_u='$id_u' AND fin > current_timestamp()");
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function setParticipation($id_u, $id_s){
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $pdo->query("update notifications set state = 'participate' where id_u='$id_u' AND id_s='$id_s'");
        return true;
    }

}

