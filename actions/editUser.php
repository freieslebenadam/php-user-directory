<?php
require_once '../resources/class/database.class.php';
require_once '../resources/class/usersmodel.class.php';
require_once '../resources/class/userscontroller.class.php';

$uc = new UsersController();

if (isset($_POST['id']) && 
    isset($_POST['firstName']) && 
    isset($_POST['lastName']) &&
    isset($_POST['slug'])) {

    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $slug = $_POST['slug'];

    $uc->editUser($id, $firstName, $lastName, $email, $phone, $description, $slug);
    header('Location: /');
}
else {
    var_dump($_POST);
}