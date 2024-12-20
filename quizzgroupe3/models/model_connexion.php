<?php
/************************************************************************
 * LE MODEL QUI POSSEDE LES FONCTIONS POUR ENVOYER DES REQUETES A LA BDD
 ************************************************************************/
function readUsers($bdd){
    try{
        //Requete préparé
        $req = $bdd->prepare('SELECT id, lastname, firstname, email, password FROM users');

        //Exécution de la requête
        $req->execute();

        //Récupérer la réponse de la bdd : je reçois un tableau contenant des tableaux d'utilisateurs
        $data = $req->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}

function readUserByMail($bdd,$email){
    try{
        //Préparation de ma requête SELECT
        $req = $bdd->prepare('SELECT id, firstname, lastname, email, password FROM users WHERE email = ? LIMIT 1');

        //Binding de Param :
        $req->bindParam(1,$email,PDO::PARAM_STR);

        //Exécuter la requête
        $req->execute();

        //Récupération de la réponse de la BDD
        $data = $req->fetchAll();

        return $data;

    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}

function addUser($bdd,$name,$firstname,$email,$password){
    
    try{
        //Prepare notre requête d'INSERT
        $req = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (?,?,?,?)');

        //Binding de Param :
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$firstname,PDO::PARAM_STR);
        $req->bindParam(3,$email,PDO::PARAM_STR);
        $req->bindParam(4,$password,PDO::PARAM_STR);

        //Exécution de la requête
        $req->execute();

        return "$firstname $name a été enregistré avec succès !";
    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}
?>