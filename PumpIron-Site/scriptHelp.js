const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');

form.addEventListener('submit', e =>{
    e.preventDefault();
    validateInputs();

    if (document.querySelectorAll('.success').length === 3) {
        // Redirect to a new page
        window.location.href = "http://localhost:8081/PumpIron-Site/detailsHelp.php";
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
    }else if (!isValidName(usernameValue)) {
        setError(username, 'Provide a name that only contains letters and spaces');
    }else{
    setSuccess(username);
    }
};

function ValidateEmail() {
    const emailValue = email.value.trim();
    if(emailValue === '') {
        setError(email, 'Email is required');
    }else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    }else {
        setSuccess(email);
    }
};

function ValidateMessage() {
    const messageValue = message.value;
    if(messageValue === ''){
        setError(message, 'Message is required');
    }else if (!isValidMessage(messageValue)) {
        setError(message,'Invalid input! Please only use letters, numbers, and certain punctuation.');
    }else{
        setSuccess(message);
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

};