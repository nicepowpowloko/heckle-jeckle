<?php
    class DB{
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';     
        private $database = 'bazar'; 
        private $db;

        public function __construct($host = null, $password = null, $username = null, $database = null){
            if($host != null){
                $this->host = $host;
                $this->password = $password;
                $this->username = $username;
                $this->database = $database;
            }

            try{
  
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        }catch(PDOException $e){
            die('IMPOSSIBLE DE SE CO A LA BASE');
        }
        }

        public function query($sql){

            $req = $this->db->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }

    }

  


?>