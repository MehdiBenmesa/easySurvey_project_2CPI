<?php
    class Spec
    {
        private $pdo;
        private $id_spec;
        private $spec;
        private $groupes;
        function __construct()
        {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }
        public static function getSpecTable()
        {
            $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
            return $pdo->query("select * from specs")->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delSpec(){
            $this->pdo->query("delete from specs where id_spec='$this->id_spec'");
        }

        public function addSpec()
        {
            $this->pdo->query("insert into specs (spec, groupes)  values ('$this->spec','$this->groupes')");
        }


        public function getSpec()
        {
            return $this->spec;
        }


        public function setSpec($spec)
        {
            $this->spec = $spec;
        }

        public function getGroupes()
        {
            return $this->pdo->query("select groupes from specs where spec='$this->spec'")->fetch(PDO::FETCH_ASSOC)['groupes'];
        }

        public function setGroupes($groupes)
        {
            $this->groupes = $groupes;
        }


        public function getIdSpec()
        {
            return $this->id_spec;
        }


        public function setIdSpec($id_spec)
        {
            $this->id_spec = $id_spec;
        }
    }