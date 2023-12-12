<?php
class Connection{
        private $server =  "mysql:host=localhost:8889;
        dbname=infodog";
        private $username = "AlexisR";
        private $password = "rorj040212";
        private $options = array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        protected $conn;

        public function open () {
            try{
                $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
                return $this -> conn;
            }
            catch (PDOException $e){
                echo "Actualmente existe un problema en la conexión, espere a ser canalizado con el administrador." . $e->getMessage();
            }
        }

        public function close(){
            $this->conn = null;
        }
}
?>