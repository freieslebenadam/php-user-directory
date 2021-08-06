<?php
$action = "actions/createUser.php";
$firstNameValue = "";
$lastNameValue = "";
$emailValue = "";
$phoneValue = "";
$descriptionValue = "";
$btnValue = "Přidat";

if (isset($user)) {
    $action = "actions/editUser.php";
    $firstNameValue = $user['FirstName'];
    $lastNameValue = $user['LastName'];
    $emailValue = $user['Email'];
    $phoneValue = $user['Phone'];
    $descriptionValue = $user['Description'];
    $btnValue = "Upravit";
}
?>
<form action="<?= $action ?>" method="POST" novalidate id="userForm">
    <div class="form-group">
        <label for="firstName"><b>Křestní jméno:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="firstName"
            placeholder="Jan"
            value="<?= $firstNameValue ?>"
            data-pristine-required
            data-pristine-maxlength="20"
            data-pristine-required-message="Toto pole nemůže zůstat prázné."
            data-pristine-maxlength-message="Maximální počet znaků je 20"
        />
    </div>
    <div class="form-group">
        <label for="lastName"><b>Příjmení:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="lastName"
            placeholder="Novák"
            value="<?= $lastNameValue ?>"
            data-pristine-required
            data-pristine-maxlength="20"
            data-pristine-required-message="Toto pole nemůže zůstat prázné."
            data-pristine-maxlength-message="Maximální počet znaků je 20"
        />
    </div>
    <div class="form-group">
        <label for="email"><b>E-Mail:</b></label>
        <br>
        <input class="form-control"
            type="email"
            name="email"
            placeholder="novak@email.cz"
            value="<?= $emailValue ?>"
            data-pristine-maxlength="50"
            data-pristine-maxlength-message="Maximální počet znaků je 50"
            data-pristine-email-message="Toto není platná email adresa"
        />
    </div>
    <div class="form-group">
        <label for="phone"><b>Telefon:</b></label>
        <br>
        <input class="form-control"
            type="phone"
            name="phone"
            placeholder="123456789"
            value="<?= $phoneValue ?>"
            data-pristine-maxlength="9"
            data-pristine-pattern="/^[0-9]{9}$/g"
            data-pristine-maxlength-message="Maximální počet znaků je 9"
            data-pristine-pattern-message="Telefonní číslo musí být ve formátu 123456789"
        />
    </div>
    <div class="form-group">
        <label for="description"><b>Poznámky:</b></label>
        <br>
        <textarea class="form-control" style="font-family: sans-serif;"
            name="description" 
            cols="22" 
            rows="10"
        ><?= $descriptionValue ?></textarea>
    </div>

    <?php if (isset($user)):?>
    <input type="hidden" name="id" value="<?= $user['ID'] ?>">
    <input type="hidden" name="slug" value="<?= $user['Slug'] ?>">
    <?php endif; ?>

    <button type="submit">
        <b><?= $btnValue ?></b>
    </button>
</form>