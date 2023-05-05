const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');

form.addEventListener('submit', e =>{
    if(validateInputs()==false){
        e.preventDefault();
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');

    // Add shake animation using jQuery
    $(inputControl).addClass('shake');

    // Remove the shake animation after 500ms
    setTimeout(() => {
        $(inputControl).removeClass('shake');
    }, 500);
};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidName = username =>{
    const regexMessage = /^[a-zA-Z ]+$/;
    return regexMessage.test(username);
}

const isValidMessage = message =>{
    const regexMessage = /^[a-zA-Z0-9.,!? ]+$/;
    return regexMessage.test(message);
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function ValidateUsername() {
    const usernameValue = username.value.trim();
    if(usernameValue === ''){
        setError(username, 'Name is required');
        return false;
    }else if (!isValidName(usernameValue)) {
        setError(username, 'Provide a name that only contains letters and spaces');
        return false;
    }else{
        setSuccess(username);
        return true;
    }
};

function ValidateEmail() {
    const emailValue = email.value.trim();
    if(emailValue === '') {
        setError(email, 'Email is required');
        return false;
    }else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        return false;
    }else {
        setSuccess(email);
        return true;
    }
};

function ValidateMessage() {
    const messageValue = message.value;
    if(messageValue === ''){
        setError(message, 'Message is required');
        return false;
    }else if (!isValidMessage(messageValue)) {
        setError(message,'Invalid input! Please only use letters, numbers, and certain punctuation.');
        return false;
    }else{
        setSuccess(message);
        return true;
    }
};

$("#name").on("change", function () {
    ValidateUsername();
});

$("#email").on("change", function () {
    ValidateEmail();
});

$("#message").on("change", function () {
    ValidateMessage();
});

const validateInputs = () => {

    ValidateUsername();
    ValidateEmail();
    ValidateMessage();

    if(ValidateUsername()==false || ValidateEmail()==false || ValidateMessage()==false){
        return false;
    }
};