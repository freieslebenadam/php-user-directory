<?php
include_once '../resources/class/database.class.php';
include_once '../resources/class/usersmodel.class.php';
include_once '../resources/class/userscontroller.class.php';

$uc = new UsersController();

if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    $uc->addUser($firstName, $lastName, $email, $phone, $description);
    header('Location: /');
}
else {
    var_dump($_POST);
}