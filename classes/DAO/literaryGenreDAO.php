<?php

    class literaryGenreDAO {

        private $connectionDB;

        public function __construct() {
            $this->connectionDB = new Connection(); 
        }

        private function executeSqlComands($sqlComand) {
            return mysqli_query($this->connectionDB->getConnection(), $sqlComand);
        }

        public function createLiteraryGenre($literaryGenre) {
            $sql = 'INSERT INTO generosliterarios(genero) VALUES ("'. $literaryGenre->getLiteraryGenre() .'")';

            $this->executeSqlComands($sql);
        }

        public function getLiteraryGenre() {
            $sql = 'SELECT * FROM generosliterarios ORDER BY id_genero ASC';

            return $this->executeSqlComands($sql);
        }
    }

?>