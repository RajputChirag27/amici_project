var email = document.getElementById("email");
var password = document.getElementById("password");
var submit = document.getElementById("submit").addEventListener("click", validateForm);

// Validate Email

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

// Validate Password

function validatePassword(password) {
    var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    return re.test(password);
}

// Validate Form

function validateForm() {
    if (validateEmail(email.value) && validatePassword(password.value)) {
        return true;
    } else {
        alert("Invalid Email or Password");
        return false;
    }
}


