var global = "";

//Options BTN
const optionsBtn = document.querySelector('.options');

//call to nav
const navEl = document.querySelector('.nav');

//btn continue
const btn_continue = document.querySelector('.btn-continue');

//Message
const messageEl = document.querySelector('.message');

//input with money to withwardl
const balance_DBEl = document.querySelector('.balance-DB');

//form of choose amount
const choose_amountEl = document.querySelector('.choose-amount');
const withdrawals_user_Form = document.querySelector('.withdrawals-user');
const btn_withdrawalsEl = document.querySelector('.btn-withdrawals');
const money_withdrawalsEl = document.querySelector('.money-withdrawals');

const choose_Form = document.querySelector('.choose-form');
const amountEl = document.querySelectorAll('.amount');

optionsBtn.addEventListener('click', () => {

    if(navEl.style.right === '')
    {
        navEl.style.right = '0';
    }
    else if(navEl.style.right === '-360px')
    {
        navEl.style.right = '0';
    }
    else if(navEl.style.right === '0px')
    {
        navEl.style.right = '-360px';
    }
});


amountEl.forEach((e) => {
    amountEl[0].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
            
        }
        else
        {
            const amount = amountEl[0].textContent;
            amountEl[0].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[1].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[1].textContent;
            amountEl[1].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[2].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[2].textContent;
            amountEl[2].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[3].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[3].textContent;
            amountEl[3].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[4].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[4].textContent;
            amountEl[4].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[5].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[5].textContent;
            amountEl[5].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[6].addEventListener('click', () => {
        let chartAmount = ""; 
        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else if(amountEl[7].className === "amount choose")
        {
            amountEl[7].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[6].textContent;
            amountEl[6].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
    });
    amountEl[7].addEventListener('click', () => {
        let chartAmount = ""; 

        if(amountEl[0].className === "amount choose")
        {
            amountEl[0].classList.remove('choose');
        }
        else if(amountEl[2].className === "amount choose")
        {
            amountEl[2].classList.remove('choose');
        }
        else if(amountEl[3].className === "amount choose")
        {
            amountEl[3].classList.remove('choose');
        }
        else if(amountEl[4].className === "amount choose")
        {
            amountEl[4].classList.remove('choose');
        }
        else if(amountEl[5].className === "amount choose")
        {
            amountEl[5].classList.remove('choose');
        }
        else if(amountEl[6].className === "amount choose")
        {
            amountEl[6].classList.remove('choose');
        }
        else if(amountEl[1].className === "amount choose")
        {
            amountEl[1].classList.remove('choose');
        }
        else
        {
            const amount = amountEl[7].textContent;
            amountEl[7].classList.add('choose');
            for(let i = 0; i < amount.length; i++)
            {
                if(i !== 0)
                {
                    chartAmount += amount[i];
                }
            }
            global = chartAmount;
            balance_DBEl.value = global;
        }
        console.log(global)
    });


});

btn_continue.addEventListener('click', () => {
    if(global !== '')
    {
        const xml = new XMLHttpRequest();
        xml.open('POST', '../interactivity/balance-withwardBD.php', true);

        xml.onreadystatechange = () =>
        {
            if(xml.readyState === 4)
            {
                if(xml.status === 200)
                {
                    const data = xml.response;
                    const p = document.createElement('p');
                    if(data === 'success')
                    {
                        location.href = 'main.php';
                    }
                    else
                    {
                        p.innerText = data;
                        messageEl.appendChild(p);
                        messageEl.style.display = 'block';
                        setTimeout(() => {
                            messageEl.style.display = 'none';
                            p.innerText = '';
                        }, 2000);
                    }
                }
            }
        }
        const dataForm = new FormData(choose_Form);
        xml.send(dataForm);
    }
    else
    {
        const p = document.createElement('p');
        p.innerText = "Please, you choose one amount";
        messageEl.appendChild(p);
        messageEl.style.display = 'block';

        setTimeout(() => {
            messageEl.style.display = 'none';
            p.innerText = '';
        }, 2000);
    }
});

withdrawals_user_Form.addEventListener('submit', (e) => {
    e.preventDefault();
})

choose_amountEl.addEventListener('click', () => {
    withdrawals_user_Form.style.display = 'flex';
});

btn_withdrawalsEl.addEventListener('click', () => {
    const p = document.createElement('p');

    if(money_withdrawalsEl.value === '')
    {
        p.innerText = 'Enter a amount';
        messageEl.appendChild(p);
        messageEl.style.display = 'block';
        messageEl.style.zIndex = '2';

        setTimeout(() => {
            messageEl.style.display = 'none';
            p.innerText = '';
            messageEl.style.zIndex = '0';
        }, 2000);
    }
    else
    {
        let v = false;
        const min=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z"];
        const mai=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
        for(let i = 0; i < money_withdrawalsEl.value.length; i++)
        {
            for(let j = 0; j < min.length; j++)
            {
                if(money_withdrawalsEl.value[i] === min[j] || money_withdrawalsEl.value[i] === mai[j])
                {
                    v = true;
                    p.innerText = 'Only numbers';
                    messageEl.appendChild(p);
                    messageEl.style.display = 'block';
                    messageEl.style.zIndex = '2';
            
                    setTimeout(() => {
                        messageEl.style.display = 'none';
                        p.innerText = '';
                        messageEl.style.zIndex = '0';
                    }, 2000);
            
                }
            }
        }
        if(v === false)
        {
            const xml = new XMLHttpRequest();
            xml.open('POST', '../interactivity/balance-withwardBD.php', true);
            xml.onreadystatechange = () => {
                if(xml.readyState === 4)
                {
                    if(xml.status === 200)
                    {
                        const data = xml.response;

                        if(data === 'success')
                        {
                            location.href = 'main.php';
                        }
                        else
                        {
                            p.innerText = data;
                            messageEl.appendChild(p);
                            messageEl.style.display = 'block';
                            messageEl.style.zIndex = '2';
                    
                            setTimeout(() => {
                                messageEl.style.display = 'none';
                                p.innerText = '';
                                messageEl.style.zIndex = '0';
                            }, 2000);
                    
                        }
                    }
                }
            }
            const formData = new FormData(withdrawals_user_Form);
            xml.send(formData);
        }
    }
})
