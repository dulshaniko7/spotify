const registerForm = document.querySelector('#registerForm');
const usernamePattern = /^[a-zA-Z][a-zA-Z0-9,.@#]{6,12}$/

const usernameR = document.querySelector('#usernameR');

const emailR = document.querySelector('#emailR');
//const emailPattern = /^\S{5,15}@\S{3,10}\.S{2,8}$/;
const emailPattern =/^[a-zA-Z0-9]{5,16}@[a-zA-Z]{3,8}.[a-zA-Z]{2,6}$/

const  passwordR = document.querySelector('#passwordR');
const  passwordConfirm = document.querySelector('#passwordConfirm');

const submitR = document.querySelector("#submitR");




const loginSubmit = document.querySelector("#login");




let error=0;
let usernameError = true;
let emailError = true;
let passwordError = true;


usernameR.addEventListener('keyup', evt => {

    if(usernamePattern.test(evt.target.value)){
        usernameR.setAttribute('class','success');
    }
    else{
        usernameR.setAttribute('class','error');
    }
    }
);

usernameR.addEventListener('blur', evt => {
    if(!usernamePattern.test(usernameR.value)){
        usernameError = true;
        submitR.disabled = true;
        console.log("error in blur username");
        return false;
    }
    else{
        usernameError =false;
        submitR.disabled = false;
        return true;
    }
    }
);
emailR.addEventListener('keyup',evt => {
    if(emailPattern.test(evt.target.value)){
        emailR.setAttribute('class','success');

    }
    else{
        emailR.setAttribute('class','error');

    }
});

emailR.addEventListener('blur',evt => {
    if(!emailPattern.test(emailR.value)){
        emailError = true;
        submitR.disabled = true;
        console.log("error in blur email");
        return false;
    }
    else
    {
        emailError=false;
        submitR.disabled = false;
        return true;
    }

});

function passwordCheck(){
    if(passwordR.value==passwordConfirm.value){
        passwordConfirm.setAttribute('class','success');
    }
    else{
        passwordConfirm.setAttribute('class','error');

    }
}

function passwordConfirmCheck() {
    if(passwordR.value==passwordConfirm.value){
        passwordConfirm.setAttribute('class','success');
        passwordError= false;
        submitR.disabled = false;
        return true;
    }
    else{
        passwordConfirm.setAttribute('class','error');
        passwordError =true;
        submitR.disabled = true;
        return false;

    }
}

passwordConfirm.addEventListener('blur',evt => {
 if (usernameError || emailError || passwordError) {
     console.log(usernameError);
     console.log(emailError);
     console.log(passwordError);
     alert("submit press -error count "+error);
 }
 else {
     console.log("submit ok");
 }
});


function test() {
alert("test");
}







