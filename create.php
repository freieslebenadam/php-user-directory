<?php 
include 'resources/inc/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'resources/inc/meta.inc.php'; ?>
    <title>Vytvořit nového uživatele</title>
    <?php include 'resources/inc/styles.inc.php'; ?>
</head>

<body>
    <header>
        <a href="/">Zpět na seznam</a>
        <h1>Vytvořit nového uživatele</h1>
    </header>
    <hr>
    <main>
        <section>
            <?php include 'resources/inc/createform.inc.php'; ?>
        </section>
    </main>

    <?php include 'resources/inc/scripts.inc.php'; ?>
    <script type="text/javascript">
        const createForm = document.querySelector('#createForm');

        let pristine = new Pristine(createForm);

        createForm.addEventListener('submit', (e) => {
            let valid = pristine.validate();

            if (!valid) {
                e.preventDefault();
            }
        })
    </script>
</body>

</html>