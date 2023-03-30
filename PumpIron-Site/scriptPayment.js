const form = document.getElementById('form');
const card = document.getElementById('card');
// const street = document.getElementById('street');
// const country = document.getElementById('country');
// const city = document.getElementById('city');
// const province = document.getElementById('Province');
// const postal = document.getElementById('postal');

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


const validateInputs = () => {
    const cardValue = card.value.trim();
    // const streetValue = street.value.trim();
    // const countryValue = country.value.trim();
    // const cityValue = city.value.trim();
    // const provinceValue = province.value.trim();
    // const postalValue = postal.value.trim();
    
 
    if(cardValue === ''){
        setError(card, "The card isn't valid");
    }else{
        setSuccess(card);
    }


};