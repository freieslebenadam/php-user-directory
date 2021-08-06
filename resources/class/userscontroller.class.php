<?php

class UsersController extends UsersModel {

    public function addUser($firstName, $lastName, $email, $phone, $description) {
        $result = $this->createUser($firstName, $lastName, $email, $phone, $description, $this->makeFullSlug($firstName, $lastName));
        return $result;
    }

    public function editUser($id, $firstName, $lastName, $email, $phone, $description, $slug) {
        $result = $this->updateUser($id, $firstName, $lastName, $email, $phone, $description, $slug);
        return $result;
    }

    private function makeSlug($string, $divider) {
        $result = trim($string);
        $result = iconv('utf-8', 'us-ascii//TRANSLIT', $result);
        $result = preg_replace('/[^a-zA-Z0-9 -]/','', $result);
        $result = str_replace(' ', $divider, $result);
        $result = strtolower($result);
        return $result;
    }

    private function makeFullSlug($first, $second) {
        $divider = "-";
        
        $slug1 = $this->makeSlug($first, $divider);
        $slug2 = $this->makeSlug($second, $divider);

        return $slug1.$divider.$slug2;
    }
}
