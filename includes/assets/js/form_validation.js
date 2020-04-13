
const registerForm = document.querySelector('#registerForm');
const usernamePattern = /^[a-zA-Z][a-zA-Z0-9,.@#]{6,12}$/

const usernameR = document.querySelector('#usernameR');

const emailR = document.querySelector('#emailR');
//const emailPattern = /^\S{5,15}@\S{3,10}\.S{2,8}$/;
const emailPattern = /^[a-zA-Z0-9]{5,16}@[a-zA-Z]{3,8}.[a-zA-Z]{2,6}$/

const passwordR = document.querySelector('#passwordR');
const passwordConfirm = document.querySelector('#passwordConfirm');

const submitR = document.querySelector("#submitR");

const loginForm = document.querySelector('#loginForm');
const regForm = document.querySelector('#registerForm');
const loginSubmit = document.querySelector("#login");
const hideLogin = document.querySelector("#hideLogin");
let error = 0;
let usernameError = true;
let emailError = true;
let passwordError = true;
//let h1 = document.querySelector('#h2');
regForm.style.display = "none";
//h.style.display = "none";
hideLogin.addEventListener('click', function () {
    regForm.style.display = "block";
    loginForm.style.display = "none";
});


//usernameR.classList.add("error");

usernameR.addEventListener('keyup', evt => {

        if (usernamePattern.test(evt.target.value)) {
            usernameR.classList.remove("error");
        }
        else {
            usernameR.classList.add("error");
        }
    }
);

usernameR.addEventListener('blur', function () {
        if (!usernamePattern.test(usernameR.value)) {
            usernameError = true;
            submitR.disabled = true;
            console.log("error in blur username");
            return false;
        }
        else {
            usernameError = false;
            submitR.disabled = false;
            return true;
        }
    }
);
emailR.addEventListener('keyup', evt => {
    if (emailPattern.test(evt.target.value)) {

        emailR.classList.remove("error");
    }
    else {
        emailR.classList.add("error");

    }
});

emailR.addEventListener('blur', function () {

    if (!emailPattern.test(emailR.value)) {
        emailError = true;
        submitR.disabled = true;
        console.log("error in blur email");
        return false;
    }
    else {
        emailError = false;
        submitR.disabled = false;
        return true;
    }

});

function passwordCheck() {
    if (passwordR.value == passwordConfirm.value) {
        passwordConfirm.classList.remove("error");
    }
    else {

        passwordConfirm.classList.add("error");
    }
}

function passwordConfirmCheck() {
    if (passwordR.value == passwordConfirm.value) {

        passwordConfirm.classList.remove("error")
        passwordError = false;
        submitR.disabled = false;
        return true;
    }
    else {
        passwordConfirm.setAttribute('class', 'error');
        passwordConfirm.classList.add("error");
        passwordError = true;
        submitR.disabled = true;
        return false;

    }
}

passwordConfirm.addEventListener('blur', function () {

    if (usernameError || emailError || passwordError) {
        console.log("usernameError " + usernameError);
        console.log("emailError " + emailError);
        console.log("passwordError " + passwordError);
        alert("submit press -error count ");
    }
    else {
        console.log("submit ok");
    }
});


function test() {
    alert("test");
}

const play = document.querySelector('.play');
const pause = document.querySelector('.pause');

play.addEventListener("click", function () {

    play.style.display = "none";
    pause.style.display = "block";
});

pause.addEventListener("click", function () {
    pause.style.display = "none";
    play.style.display = "block"
})






