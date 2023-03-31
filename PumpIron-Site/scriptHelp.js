const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');

form.addEventListener('submit', e =>{
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

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

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const messageValue = message.value;

    if(usernameValue === ''){
    setError(username, 'Name is required');
    }else if (!isValidName(usernameValue)) {
        setError(username, 'Provide a name that only contains letters and spaces');
    }else{
    setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    }else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    }else {
        setSuccess(email);
    }

    if(messageValue === ''){
        setError(message, 'Message is required');
    }else if (!isValidMessage(messageValue)) {
        setError(message,'Invalid input! Please only use letters, numbers, and certain punctuation.');
    }else{
        setSuccess(message);
    }

};