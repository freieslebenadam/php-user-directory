<?php

class UsersView extends UsersModel {
    
    public function getAllUsers() {
        $result = $this->fetchAllUsers();
        return $result;
    }

    public function getBySlug($slug) {
        $result = $this->fetchBySlug($slug);
        return $result;
    }
}