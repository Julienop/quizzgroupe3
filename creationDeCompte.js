/* Création d'un nouveau compte */

function getValues()
{


    let myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let pseudonyme = document.getElementById("pseudonyme").value;
    let email = document.getElementById("email").value;
    let motDePasse = document.getElementById("motDePasse").value;



    let raw = JSON.stringify({
        "firstname": prenom,       /* yann */
        "lastname": nom,           /*tieba*/
        "email": email,            /*yanntieba@mail.com*/
        "password": motDePasse     /*motdepassedeyann*/
    });

    let requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("https://quizz.adrardev.fr/api/user", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}
