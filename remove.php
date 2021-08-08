<?php 
require 'resources/inc/autoloader.inc.php';

$uv = new UsersView();
$user = $uv->getBySlug($_GET['slug']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'resources/inc/meta.inc.php'; ?>
    <title>Opravdu chcete odstranit uživatele?</title>
</head>

<body>
    <header>
        <a href="/<?= $user['Slug'] ?>">Zpět na uživatele</a>
        <h1>Chystáte se odstranit uživatele <?= $user['FirstName'] ?></h1>
    </header>
    <hr>
    <main>
        <section>
            <h2>Určitě to chcete udělat?</h2>
            <a href="/<?= $user['Slug'] ?>"><button type="button">NE</button></a>
            <form action="../actions/deleteUser.php" method="POST" style="display: inline;">
                <input type="hidden" name="id" value="<?= $user['ID'] ?>">
                <button type="submit">ANO</button>
            </form>
        </section>
        <hr>
        <section>
            <h3><?= $user['FirstName']." ".$user['LastName'] ?></h3>
            <p>
                <b><?= $user['Phone'] ?></b>
                <br>
                <i><?= $user['Email'] ?></i>
            </p>
            <p>
                <i><?= $user['Description'] ?></i>
            </p>
        </section>
    </main>
</body>

</html>