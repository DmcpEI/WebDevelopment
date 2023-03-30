const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
/*
const card = document.getElementById('card');
const street = document.getElementById('street');
const country = document.getElementById('country');
const city = document.getElementById('city');
const province = document.getElementById('Province');
const postal = document.getElementById('postal');
*/

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
    /*
    const cardValue = card.value.trim();
    const streetValue = street.value.trim();
    const countryValue = country.value.trim();
    const cityValue = city.value.trim();
    const provinceValue = province.value.trim();
    const postalValue = postal.value.trim();
    */

    if(usernameValue === ''){
    setError(username, 'Name is required');
    }else{
    setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(messageValue === ''){
        setError(message, 'Message is required');
    }else if (!isValidMessage(messageValue)) {
        setError(message,'Invalid input! Please only use letters, numbers, and certain punctuation.');
    }else{
        setSuccess(message);
    }
    
 /*
    if(cardValue === ''){
        setError(card, "The card isn't valid");
    }else{
        setSuccess(card);
    }
*/

};