<?php

class UsersModel extends Database {

    protected function fetchAllUsers() {
        $sql = "SELECT * FROM `users`";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}