const form = document.getElementById('form');
const card = document.getElementById('card');
const street = document.getElementById('street');
const city = document.getElementById('city');
const province = document.getElementById('province');
const postal = document.getElementById('postal');
const select = document.getElementById('select');


form.addEventListener('submit', e =>{
    e.preventDefault();
    validateInputs();
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


function isValidCardNumber(cardNumber) {
    // Remove all non-digit characters from the input
    cardNumber = cardNumber.replace(/\D/g, '');
  
    // Check if the card number is between 13 and 19 digits long
    if (cardNumber.length < 13 || cardNumber.length > 19) {
      return false;
    }
  
    // Apply the Luhn algorithm to the card number
    let sum = 0;
    let shouldDouble = false;
    for (let i = cardNumber.length - 1; i >= 0; i--) {
      let digit = parseInt(cardNumber.charAt(i));
      if (shouldDouble) {
        digit *= 2;
        if (digit > 9) {
          digit -= 9;
        }
      }
      sum += digit;
      shouldDouble = !shouldDouble;
    }
    return sum % 10 == 0;
}

const isValidStreet = street =>{
    const regexMessage = /^[a-zA-Z0-9., ]+$/;
    return regexMessage.test(street);
}

const isValidCity = city =>{
    const regexMessage = /^[a-zA-Z ]+$/;
    return regexMessage.test(city);
}

const isValidProvince = province =>{
    const regexMessage = /^[a-zA-Z ]+$/;
    return regexMessage.test(province);
}

const isValidPostalCode = postalCode => {
    const regexPostalCode = /^\d{4}(-\d{3})?$/;
    return regexPostalCode.test(postalCode);
}

const isValidSelect = select =>{
    return select.value != "0";
}


function ValidateCard() {
    const cardValue = card.value.trim();
    if(cardValue === ''){
        setError(card, "Card number is required");
    }else if (!isValidCardNumber(cardValue)){
        setError(card, "Invalid Number");
    }else{
        setSuccess(card);
    }
};

function ValidateStreet() {
    const streetValue = street.value.trim();
    if(streetValue === ''){
        setError(street, "Street name is required");
    }else if (!isValidStreet(streetValue)){
        setError(street, 'Invalid input! Please only use letters, numbers, and certain punctuation');
    }else{
        setSuccess(street);
    }
};

function ValidateCity() {
    const cityValue = city.value.trim();
    if(cityValue === ''){
        setError(city, "City name is required");
    }else if (!isValidCity(cityValue)){
        setError(city, 'Invalid input! Please only use letters, numbers, and certain punctuation');
    }else{
        setSuccess(city);
    }
};

function ValidateProvince() {
    const provinceValue = province.value.trim();
    if(provinceValue === ''){
        setError(province, "Province name is required");
    }else if (!isValidProvince(provinceValue)){
        setError(province, 'Invalid input! Please only use letters, numbers, and certain punctuation');
    }else{
        setSuccess(province);
    }
};

function ValidatePostal() {
    const postalValue = postal.value.trim();
    if(postalValue === ''){
        setError(postal, "Postal code is required");
    }else if (!isValidPostalCode(postalValue)){
        setError(postal, "Invalid postal code! Please enter a valid postal code.");
    }else{
        setSuccess(postal);
    }
};

function ValidateSelect() {
    if(!isValidSelect(select)){
        setError(select, 'Please select an option');
    }else{
        setSuccess(select);
    }
};


$("#card").on("change", function () {
    ValidateCard();
});

$("#street").on("change", function () {
    ValidateStreet();
});

$("#city").on("change", function () {
    ValidateCity();
});

$("#province").on("change", function () {
    ValidateProvince();
});

$("#postal").on("change", function () {
    ValidatePostal();
});

$("#select").on("change", function () {
    ValidateSelect();
});

const validateInputs = () => {  
 
    ValidateCard();
    ValidateStreet();
    ValidateCity();
    ValidateProvince();
    ValidatePostal();
    ValidateSelect();

};