<?php


class Sondage {

    private $pdo;
    private $description;
    private $option;
    private $time;
    private $nomSondage;
    private $questions;
    private $id;
    private $list;
    private $state;

    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
            $this->reponse = '';
            $this->option = '';
            $this->nomSondage = '';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function configModal($id_s){
        $stm = $this->pdo->query("select id_q from sondage_questions WHERE id_s='$id_s'");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        while ($q = $stm->fetch()){
            $id = $q['id_q'];
            $this->pdo->query("insert into sondage_questions (id_s, id_q) VALUES ('$this->id','$id')");
        }
    }

    public static function getModeles(){
        $modals = array();
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $stm = $pdo->query("select id_s, nom_sondage,module,description from surveys WHERE modale='y'");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        while($q = $stm->fetch()){
            $modals[] = array('id_s' => $q['id_s'],'module' => utf8_encode($q['module']),'description' => utf8_encode($q['description']),'name' => utf8_encode($q['nom_sondage']) );
        }
        return $modals;
    }

    public function setModal(){
        $this->pdo->query("update surveys set modale='y' where id_s='$this->id'");
    }
    public function getList(){
        return $this->pdo->query("select list from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['list'];
    }

    public function setList($list){
        $this->list = $list;
    }

    public function getDescription(){
        return $this->pdo->query("select description from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['description'];
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getOption(){
        return $this->pdo->query("select module from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['module'];
    }

    public function setOption($option){
        $this->option = $option;
    }

    public function getTime(){
        return $this->pdo->query("select fin from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['fin'];
    }

    public function setTime($time){
        $this->time = $time;
    }

    public function getNomSondage()
    {
        return $this->pdo->query("select nom_sondage from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['nom_sondage'];
    }

    public function setNomSondage($nomSondage)
    {
        $this->nomSondage = $nomSondage;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function addSondage($id){
        if($this->description && $this->option && $this->time && $this->nomSondage && $this->list) {
                $stm = $this->pdo->prepare("insert into surveys (description, module, id, fin, nom_sondage, list)  values (:d,:o,:id,:t,:n,:l)");
                $stm->bindValue(':d',$this->description,PDO::PARAM_STR);
                $stm->bindValue(':o',$this->option,PDO::PARAM_STR);
                $stm->bindValue(':id',$id,PDO::PARAM_INT);
                $stm->bindValue(':t',$this->time);
                $stm->bindValue(':n',$this->nomSondage,PDO::PARAM_STR);
                $stm->bindValue(':l',$this->list,PDO::PARAM_STR);
                $stm->execute();
                $this->id = $this->pdo->lastInsertId();
                return true;
        }else return false;
    }

    public function getSurveyQuestions(){
        $this->questions = array();
        $result = $this->pdo->query("select questions.id_q,question, type from questions JOIN sondage_questions ON questions.id_q = sondage_questions.id_q WHERE id_s ='$this->id'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($reponse = $result->fetch()){
            $this->questions[] = array($reponse['id_q'],utf8_encode($reponse['question']),$reponse['type']);
        }
        return $this->questions;
    }

    public function addSurveyResponses($id_q, $id_r,$id_user, $other = null){
        $stm = $this->pdo->prepare("insert into sondage_reponses (id_s, id_q, id_r, id_user, other)  values (:d,:o,:id,:t,:n)");
        $stm->bindValue(':d',$this->id,PDO::PARAM_INT);
        $stm->bindValue(':o',$id_q,PDO::PARAM_INT);
        $stm->bindValue(':id',$id_r,PDO::PARAM_INT);
        $stm->bindValue(':t',$id_user,PDO::PARAM_INT);
        $stm->bindValue(':n',$other,PDO::PARAM_STR);
        $stm->execute();
    }

    public function getState()
    {
        return $this->pdo->query("select state from surveys where id_s = '$this->id'")->fetch(PDO::FETCH_ASSOC)['state'];
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function endCreation(){
        $this->pdo->query("update surveys set state = 'y' where id_s='$this->id'");
    }

    public function incrementParticipant(){
        $this->pdo->query("update surveys set nb_p = nb_p + 1 where id_s = '$this->id'");
    }

    public function getParticipantNumbre(){
      return $this->pdo->query("select nb_p from surveys where id_s='$this->id'")->fetch(PDO::FETCH_ASSOC)['nb_p'];

    }
}

