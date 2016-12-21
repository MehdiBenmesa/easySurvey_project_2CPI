<?php


class Reponse {
    private $id_r;
    private $reponse;
    private $pdo;
    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
            $this->reponse = '';

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function setReponse($reponse){
        $this->reponse = $reponse;
    }
    public function getFrequency($id_s, $id_q){
        return (int)$count =$this->pdo->query("select * from sondage_reponses where id_s='$id_s' and id_q='$id_q' and  id_r ='$this->id_r'")->rowCount();
    }


    public function getReponse(){
        return $this->reponse;
    }

    public function addReponse($id_q){
        if($this->reponse) {
            $stm = $this->pdo->prepare("insert into reponses (reponse, id_q) values (:rep,:id_q)");
            $stm->bindValue(':rep',$this->reponse,PDO::PARAM_STR);
            $stm->bindValue(':id_q',$id_q,PDO::PARAM_INT);
            $stm->execute();
            return true;
        }else return false;
    }


    public function getIdR()
    {
        return $this->id_r;
    }


    public function setIdR($id_r)
    {
        $this->id_r = $id_r;
    }


}

