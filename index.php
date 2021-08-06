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
    <header>
        <h1>Archiv uživatelů</h1>
    </header>
    <hr>
    <main>
        <section>
            <h2>Vytvořit uživatele:</h2>
            <?php include 'resources/inc/createform.inc.php'; ?>
        </section>
        <hr>
        <section>
            <h2>Seznam:</h2>
            <?php include 'resources/inc/userstable.inc.php'; ?>
        </section>
    </main>
</body>

</html>