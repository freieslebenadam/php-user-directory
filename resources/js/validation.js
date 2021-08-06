const userForm = document.querySelector('#userForm');

let pristine = new Pristine(userForm);

userForm.addEventListener('submit', (e) => {
    let valid = pristine.validate();

    if (!valid) {
        e.preventDefault();
    }
})