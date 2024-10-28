let myHeaders = new Headers();
const token = window.localStorage.getItem("token");
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Authorization", `Bearer ${token}`);

let raw = JSON.stringify({
    "username": "adm@test.com",
    "password": "password"
});

let requestOptions = {
    method: 'GET',
    headers: myHeaders,
    body: null,
    redirect: 'follow'
};

fetch("https://quizz.adrardev.fr/api/me", requestOptions)
    .then(response => response.json())
    .then
    (
        result =>
        {
            console.log(result),
            affichage = document.body.querySelector("#affichageCompte"),
            affichage.innerText = '';
            for (const cursor in result) {
                console.log(`${cursor}:${result[cursor]}`);
                affichage.append(`${cursor}:${result[cursor]}`);
            }
            
        }
    )
    .catch(error => console.log('error', error));