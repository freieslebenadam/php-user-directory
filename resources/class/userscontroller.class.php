<?php

class UsersController extends UsersModel {

    public function addUser($firstName, $lastName, $email, $phone, $description) {
        $firstName = trim($firstName);
        $firstName = ucfirst($firstName);

        $lastName = trim($lastName);
        $lastName = ucfirst($lastName);

        $slug = $this->makeFullSlug($firstName, $lastName);

        $users = $this->fetchAllUsers();
        foreach ($users as $u) {
            if ($u['Slug'] === $slug) {
                return false;
            }
        }

        $result = $this->createUser($firstName, $lastName, $email, $phone, $description, $slug);
        return $result;
    }

    public function editUser($id, $firstName, $lastName, $email, $phone, $description, $slug) {
        $result = $this->updateUser($id, $firstName, $lastName, $email, $phone, $description, $slug);
        return $result;
    }

    public function removeUser($id) {
        $result = $this->deleteUser($id);
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
