<?php


class Question {

    private $id_q;
    private $type;
    private $question;
    private $pdo;
    private $reponses;
    private $original;

    function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
            $this->question = '';
            $this->type = '';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getIdQ(){

        return $this->id_q;
    }

    public function setIdQ($id_q){
        $this->id_q = $id_q;
    }

    public function setQuestion($question){
        $this->question = $question;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function addQuestion(){
        if($this->type && $this->question) {

                $stm = $this->pdo->prepare("insert into questions (type,question,original) values (:t,:q,:o)");
                $stm->bindValue(':t', $this->type,PDO::PARAM_STR);
                $stm->bindValue(':q', $this->question,PDO::PARAM_STR);
                $stm->bindValue(':o', $this->original,PDO::PARAM_STR);
                $stm->execute();
                $this->id_q = $this->pdo->lastInsertId();

        }
    }

    public function getReponses(){
        $this->reponses = array();
        $result = $this->pdo->query("select reponse from reponses  where id_q = '$this->id_q'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($reponse = $result->fetch()){
           $this->reponses[] = utf8_encode($reponse['reponse']);
        }
        return $this->reponses;
    }

    public function getReponsesIds(){
        $this->reponses = array();
        $result = $this->pdo->query("select id_r, reponse from reponses  where id_q = '$this->id_q'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($reponse = $result->fetch()){
            $this->reponses[] = array($reponse['id_r'], utf8_encode($reponse['reponse']));
        }
        return $this->reponses;
    }

    public function addToSurvey($id_s){
        $this->pdo->query("insert into sondage_questions (id_s,id_q) values ('$id_s','$this->id_q')");
    }

    public function removeFromSurvey($id_s){
        $this->pdo->query("delete from sondage_questions where id_s = '$id_s' and id_q = '$this->id_q'");
    }

    public function getOther($id_s){
        $result = array();
        $stm= $this->pdo->query("select other from sondage_reponses where id_s='$id_s' and id_q='$this->id_q' and id_r is null");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stm->fetch()){
            $result[] = $row['other'];
        }
        return $result;
    }

    public static function getQuestionsForBank($type){
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $result = array();
        $query = $pdo->query("select id_q,question from questions WHERE type = '$type' and original = 'y' ");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        while($q = $query->fetch()){
            $result[] = array($q['id_q'],utf8_encode($q['question']));
        }
        return $result;
    }


    public function setOriginal($original)
    {
        $this->original = $original;
    }

}


