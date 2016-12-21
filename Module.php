<?php

class Module {
    private $pdo;
    private $id;
    private $code;
    function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
    public static function getAllModals(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo->query("select * from modules")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function delModule()
    {
            $this->pdo->query("delete from modules where id_module = '$this->id'");
    }

    public function addModule()
    {
        $this->pdo->query("insert into modules (code)  values ('$this->code')");
    }

}
