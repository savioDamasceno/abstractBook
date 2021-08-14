<?php

class UserDAO {
    private $connectionDB;

    public function __construct() {
        $this->connectionDB = new Connection();
    }

    private function executeSqlComands($sqlComand) {
        return mysqli_query($this->connectionDB->getConnection(), $sqlComand);
    }

    public function createUser($user) {
        $sql = 'INSERT INTO usuario (nome, sobrenome, email, senha, id_genero) VALUES
            (
                "' . $user->getName() . '", 
                "' . $user->getSurname() . '", 
                "' . $user->getEmail() . '", 
                "' . $user->getPassword() . '", 
                "' . $user->getIdGenre() . '"
            )';

        $this->executeSqlComands($sql);
    }
}
