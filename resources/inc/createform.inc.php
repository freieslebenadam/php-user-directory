<form action="actions/createUser.php" method="POST" novalidate id="createForm">
    <div class="form-group">
        <label for="firstName"><b>Křestní jméno:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="firstName"
            placeholder="Jan"
        />
    </div>
    <div class="form-group">
        <label for="lastName"><b>Příjmení:*</b></label>
        <br>
        <input class="form-control"
            type="text"
            name="lastName"
            placeholder="Novák"
        />
    </div>
    <div class="form-group">
        <label for="email"><b>E-Mail:</b></label>
        <br>
        <input class="form-control"
            type="email"
            name="email"
            placeholder="novak@email.cz"
        />
    </div>
    <div class="form-group">
        <label for="phone"><b>Telefon:</b></label>
        <br>
        <input class="form-control"
            type="phone"
            name="phone"
            placeholder="123456789"
        />
    </div>
    <div class="form-group">
        <label for="description"><b>Poznámky:</b></label>
        <br>
        <textarea class="form-control" style="font-family: sans-serif;"
            name="description" 
            cols="22" 
            rows="10"
        ></textarea>
    </div>
    <button type="submit">
        <b>Přidat</b>
    </button>
</form>