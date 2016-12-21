<?php


class Service {
    private $pdo;
    private $id;
    private $service;



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

    public function getService()
    {
        return $this->service;
    }


    public function setService($service)
    {
        $this->service = $service;
    }

    public static function getAllServices(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo->query("select * from services")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function delService()
    {
        $this->pdo->query("delete from services where id_service = '$this->id'");
    }

    public function addService()
    {
        $this->pdo->query("insert into services (service)  values ('$this->service')");
    }

}