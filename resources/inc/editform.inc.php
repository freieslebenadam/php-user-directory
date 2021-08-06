<form action="actions/editUser.php" method="POST" novalidate id="editForm">
    <div class="form-group">
        <label for="firstName"><b>Křestní jméno:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="firstName"
            placeholder="Jan"
            value="<?= $user['FirstName'] ?>"
        />
    </div>
    <div class="form-group">
        <label for="lastName"><b>Příjmení:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="lastName"
            placeholder="Novák"
            value="<?= $user['LastName'] ?>"
        />
    </div>
    <div class="form-group">
        <label for="email"><b>E-Mail:</b></label>
        <br>
        <input class="form-control"
            type="email"
            name="email"
            placeholder="novak@email.cz"
            value="<?= $user['Email'] ?>"
        />
    </div>
    <div class="form-group">
        <label for="phone"><b>Telefon:</b></label>
        <br>
        <input class="form-control"
            type="phone"
            name="phone"
            placeholder="123456789"
            value="<?= $user['Phone'] ?>"
        />
    </div>
    <div class="form-group">
        <label for="description"><b>Poznámky:</b></label>
        <br>
        <textarea class="form-control" style="font-family: sans-serif;"
            name="description" 
            cols="22" 
            rows="10"
        ><?= $user['Description']; ?></textarea>
    </div>
    
    <input type="hidden" name="id" value="<?= $user['ID'] ?>">
    <input type="hidden" name="slug" value="<?= $user['Slug'] ?>">

    <button type="submit">
        <b>Uložit</b>
    </button>
</form>