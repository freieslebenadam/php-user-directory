<?php 
require_once 'resources/inc/classes.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'resources/inc/meta.inc.php'; ?>
    <title>Archiv uživatelů</title>
</head>

<body>
    <header>
        <h1>Archiv uživatelů</h1>
    </header>
    <hr>
    <main>
        <section>
            <h2>Vytvořit uživatele:</h2>
            <a href="vytvorit-uzivatele"><button type="button">Nový uživatel</button></a>
        </section>
        <hr>
        <section>
            <h2>Seznam:</h2>
            <?php require 'resources/inc/userstable.inc.php'; ?>
        </section>
    </main>
</body>

</html>