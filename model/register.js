//Values of form
const formRegisterEl = document.querySelector('.form-register');

//buttom for save information users
const inputSaveEl = document.querySelector('.input-save');

//account number automatly
const nUser = document.querySelector('.n-user');

//message for user
const informationToUserEl = document.querySelector('.information-to-user');



const introducceToRegisterElP = document.createElement('p');
const welcomeToRegister = "Hello! Here you can enter personal information for do your account of the bank.";
introducceToRegisterElP.innerText = welcomeToRegister;

informationToUserEl.appendChild(introducceToRegisterElP);

formRegisterEl.addEventListener('submit', (e) => {
    e.preventDefault();
});

inputSaveEl.addEventListener('click', () => {
    //get Date
    const dateHistory = new Date();
    //call input date
    const dateEl = document.querySelector('.date');
    dateEl.value = dateHistory;
    let numbers = 0;
    let n = "";
    let cardNumber = "17";
    let i = 2;
    while(cardNumber.length < 16)
    {

        n = "" + numbers;
        if(n.length === 2)
        {
            cardNumber += numbers; 
        }
        numbers = Math.round(Math.random() * 100);
        i++;
    }
    nUser.value = cardNumber;
    cardNumber = '';
   

    const xmlRequest = new XMLHttpRequest();

    xmlRequest.open('POST', '../model/register.php', true);

    xmlRequest.onreadystatechange = () => {

        if(xmlRequest.readyState === 4)
        {
            if(xmlRequest.status === 200)
            {
                const data = xmlRequest.response;
                if(data === "success")
                {
                    location.href = '../index.php';
                }
                else
                {
                    introducceToRegisterElP.classList.add('error');
                    introducceToRegisterElP.innerText = data;
                    informationToUserEl.appendChild(introducceToRegisterElP);
                }
            }
        }

    }

    const dataForm = new FormData(formRegisterEl);
    xmlRequest.send(dataForm);
});
formRegisterEl.addEventListener('keyup', () => {
    introducceToRegisterElP.classList.remove('error');
    introducceToRegisterElP.innerText = welcomeToRegister;
    informationToUserEl.appendChild(introducceToRegisterElP);
})

