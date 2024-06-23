document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const minLength = document.getElementById('min-length');
    const uppercase = document.getElementById('uppercase');
    const number = document.getElementById('number');
    const specialChar = document.getElementById('special-char');
    
    // Vérifier la longueur minimale
    if (password.length >= 8) {
        minLength.classList.remove('invalid');
        minLength.classList.add('valid');
    } else {
        minLength.classList.remove('valid');
        minLength.classList.add('invalid');
    }

    // Vérifier la présence d'une majuscule
    if (/[A-Z]/.test(password)) {
        uppercase.classList.remove('invalid');
        uppercase.classList.add('valid');
    } else {
        uppercase.classList.remove('valid');
        uppercase.classList.add('invalid');
    }

    // Vérifier la présence d'un chiffre
    if (/\d/.test(password)) {
        number.classList.remove('invalid');
        number.classList.add('valid');
    } else {
        number.classList.remove('valid');
        number.classList.add('invalid');
    }

    // Vérifier la présence d'un caractère spécial
    if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        specialChar.classList.remove('invalid');
        specialChar.classList.add('valid');
    } else {
        specialChar.classList.remove('valid');
        specialChar.classList.add('invalid');
    }
});
