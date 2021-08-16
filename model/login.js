//data form of login
const formLoginEl = document.querySelector('.form-login');

//btn of login
const btnLoginEl = document.querySelector('.btn-login');

const phoneEl = document.querySelector('.phone');

//Error
const errorEl = document.querySelector('.error');
const p = document.createElement('p');
p.classList.add('content');
errorEl.appendChild(p);

formLoginEl.addEventListener('submit', (e) => {
    e.preventDefault();
});

btnLoginEl.addEventListener('click', () =>
{
    const xml = new XMLHttpRequest();
    xml.open('POST', 'model/login.php', true);

    xml.onreadystatechange = () =>
    {
        if(xml.readyState === 4)
        {
            if(xml.status === 200)
            {
                const data = xml.response;

                if(data === "success")
                {
                    location.href = "./view/main.php";
                }
                else
                {
                    errorEl.style.display = 'block'
                    p.innerText = data;
                    setTimeout(() => {
                        errorEl.style.display = 'none'

                    }, 5000);
                }
            }
        }
    }
    const dataForm = new FormData(formLoginEl);
    xml.send(dataForm);
});