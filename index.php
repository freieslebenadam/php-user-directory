<?php 
include 'resources/inc/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'resources/inc/meta.inc.php'; ?>
    <title>Document</title>
</head>

<body>
    <h1>Hello world</h1>
    <?php 
        $uv = new UsersView();
        $users = $uv->getAllUsers();

        foreach ($users as $user) {
            echo $user['FirstName'] . "<br>";
        }
    ?>
</body>

</html>