<?php 
include 'resources/inc/autoloader.inc.php';

$slug = $_GET['slug'];

$uv = new UsersView();
$user = $uv->getBySlug($slug);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'resources/inc/meta.inc.php'; ?>
    <title>Upravit uživatele <?= $user['FirstName']." ".$user['LastName'] ?></title>
</head>

<body>
    <header>
        <h1>Upravit uživatele <u><?= $user['FirstName']." ".$user['LastName'] ?></u></h1>
    </header>
    <hr>
    <main>

    </main>
</body>

</html>