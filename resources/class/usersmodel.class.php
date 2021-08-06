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

    protected function createUser($firstName, $lastName, $email, $phone, $description, $slug) {
        $sql = "INSERT INTO `users` (FirstName, LastName, Email, Phone, Description, Slug)
                VALUES (:firstname, :lastname, :email, :phone, :description, :slug)";
        $statement = $this->connect()->prepare($sql);
        $result = $statement->execute([
            ":firstname" => $firstName,
            ":lastname" => $lastName,
            ":email" => $email,
            ":phone" => $phone,
            ":description" => $description,
            ":slug" => $slug
        ]);
        return $result;
    }

    protected function updateUser($id, $firstName, $lastName, $email, $phone, $description, $slug) {
        $sql = "UPDATE `users` SET FirstName = :firstname, 
                                   LastName = :lastname,
                                   Email = :email,
                                   Phone = :phone,
                                   Description = :description,
                                   Slug = :slug
                WHERE ID = :id";
        $statement = $this->connect()->prepare($sql);
        $result = $statement->execute([
            ":id" => $id,
            ":firstname" => $firstName,
            ":lastname" => $lastName,
            ":email" => $email,
            ":phone" => $phone,
            ":description" => $description,
            ":slug" => $slug
        ]);
        return $result;
    }
}