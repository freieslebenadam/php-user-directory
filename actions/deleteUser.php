<?php
include_once '../resources/class/database.class.php';
include_once '../resources/class/usersmodel.class.php';
include_once '../resources/class/userscontroller.class.php';

$uc = new UsersController();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $uc->removeUser($id);
    header('Location: /');
}
else {
    var_dump($_POST);
}