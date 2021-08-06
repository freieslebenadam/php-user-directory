<?php

class UsersModel extends Database {

    protected function fetchAllUsers() {
        $sql = "SELECT * FROM `users`";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    protected function fetchOneUser($id) {
        $sql = "SELECT * FROM `users` WHERE ID = :id";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([":id" => $id]);
        $result = $statement->fetch();
        return $result;
    }

    protected function fetchBySlug($slug) {
        $sql = "SELECT * FROM `users` WHERE Slug = :slug";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([":slug" => $slug]);
        $result = $statement->fetch();
        return $result;
    }
}