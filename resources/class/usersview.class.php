<?php

class UsersView extends UsersModel {
    
    public function getAllUsers() {
        $result = $this->fetchAllUsers();
        return $result;
    }
}