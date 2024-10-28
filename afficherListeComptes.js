let requestOptions = {
    method: 'GET',
    redirect: 'follow'
};

fetch("https://quizz.adrardev.fr/api/users", requestOptions)
    .then(response => response.json())
    .then
    (
        result =>
        {
            console.log(result),
            affichage = document.body.querySelector("#affichageComptes"),
            affichage.innerText = '';
            for (i = 0; i < result.length; i++)
            {
                for (const cursor in result[i]) {
                    console.log(`${cursor}:${result[i][cursor]}`);
                    affichage.append(`${cursor}:${result[i][cursor]}`);
                }
            }
        }
    )
    .catch(error => console.log('error', error));
