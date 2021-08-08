<?php
require_once '../resources/class/database.class.php';
require_once '../resources/class/usersmodel.class.php';
require_once '../resources/class/userscontroller.class.php';

$uc = new UsersController();

if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    if ($uc->addUser($firstName, $lastName, $email, $phone, $description)) {
        header('Location: /');
    } else {
        echo "<hr>";
        echo "<h1>Tento uživatel už existuje</h1>";
        echo "<hr>";
        echo "<a href='/'>Zpět na seznam</a>";
        echo "<hr>";
    }
}
else {
    var_dump($_POST);
}