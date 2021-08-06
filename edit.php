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
        <a href="/">Zpět na seznam</a>
        <h1>Upravit uživatele <u><?= $user['FirstName']." ".$user['LastName'] ?></u></h1>
    </header>
    <hr>
    <main>
        <section>
            <?php include 'resources/inc/editform.inc.php'; ?>
        </section>
        <hr>
        <section>
            <form action="<?= $user['Slug'] ?>/odstranit" method="GET">
                <button type="submit"><i>Smazat uživatele <?= $user['FirstName'] ?></i></button>
            </form>
        </section>
    </main>
</body>

</html>