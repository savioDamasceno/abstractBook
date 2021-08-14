<?php 
    
    class Connection {
        private $pathServer = 'localhost';
        private $nameUser = 'root';
        private $password = '';

        private $dataBaseName = 'Prova-pratica';
        private $connection;

        public function __construct() {
            $this->connection = mysqli_connect($this->pathServer, $this->nameUser, $this->password) or die ('Erro ao abrir a conecxão com o servidor MySQL' . mysqli_error($this->connection));

            mysqli_select_db($this->connection, $this->dataBaseName) or die('Erro ao selecionar o banco de dados' . mysqli_error($this->connection));

            mysqli_set_charset($this->connection, 'utf-8');
        }

        public function getConnection() {
            return $this->connection;
        }

    }

?>