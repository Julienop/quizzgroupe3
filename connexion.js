function connexion()
{

    let myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    let raw = JSON.stringify({
        "username": document.getElementById("identifiant").value,
        "password": document.getElementById("motDePasse").value
    });

    let requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("https://quizz.adrardev.fr/api/login_check", requestOptions)
        .then(response => response.json())
        .then(result =>
        {
            let token = result.token;
            console.log(result.token);
            let newParagraphe = document.createElement('p');
            newParagraphe.innerText = token;
            document.body.append(newParagraphe);
            window.localStorage.setItem("token", token);
        })
        .catch(error => console.log('error', error));

}