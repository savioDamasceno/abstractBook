<?php

    class User {
        private $name;
        private $surname;
        private $email;
        private $password;
        private $idGenre;

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getSurname() {
            return $this->surname;
        }

        public function setSurname($surname) {
            $this->surname = $surname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getIdGenre() {
            return $this->idGenre;
        }

        public function setIdGenre($idGenre) {
            $this->idGenre = $idGenre;
        }

    }

?>