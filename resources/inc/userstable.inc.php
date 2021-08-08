<?php
require_once 'resources/inc/classes.inc.php';

$uv = new UsersView();
$users = $uv->getAllUsers();
?>
<table border=1 style="border-collapse: collapse;" >
    <thead>
        <tr>
            <th>Jméno</th>
            <th>E-mail</th>
            <th>Telefon</th>
            <th>Poznámka</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['FirstName']." ".$user['LastName'] ?></td>
            <td><?= $user['Email'] ?></td>
            <td><?= $user['Phone'] ?></td>
            <td><?= $user['Description'] ?></td>
            <td>
                <a href="<?= $user['Slug'] ?>">
                    <button type="button">Upravit</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <?php if(count($users) === 0): ?>
    <tfoot>
        <tr>
            <td colspan="5">
                Zatím tu nejsou žádní uživatelé. Přidejte nějakého!
            </td>
        </tr>
    </tfoot>
    <?php endif; ?>
</table>