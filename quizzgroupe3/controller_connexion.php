<?php
//Démarre ma session
session_start();

//Import des ressources nécessaire
include './Utils/functions.php';
include './models/model_connexion.php';

//DECLARATION DE MA VARIABLE D'AFFICHAGE
$message = '';

//Je vérifie si quelqu'un est connecté
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    //Je redirige vers l'accueil
    header('Location:controller_connexion.php');
    exit;
}

//ALGO : TRAITEMENT DU FORMULAIRE DE CONNEXION
//Vérifier la réception du formulaire
if(isset($_POST['submitCo'])){
    //Vérifie que les champs ne sont pas vides
    if(isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])){
        //Vérifie que l'email est au bon format
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            //Nettoyage des données
            $email = sanitize($_POST['email']);
            $password = sanitize($_POST['password']);

            //Création de l'objet de connexion à la bdd
            $bdd = connect();

            //Je récupère les données utilisateur inscrit en BDD selon l'email entré
            $data = readUserByMail($bdd,$email);

            //Vérifie que j'ai un utilisateur
            if(!empty($data)){
                //Vérifie la correspondance des mots de passe
                if(password_verify($password,$data[0]['password'])){
                    //J'enregistre les infos en $_SESSION
                    $_SESSION['id'] = $data[0]['id_user'];
                    $_SESSION['lastname'] = $data[0]['lastname'];
                    $_SESSION['firstname'] = $data[0]['firstname'];
                    $_SESSION['email'] = $data[0]['email'];

                    //Rediriger vers la page d'acceuil
                    header('Location:controller_connexion.php');
                    exit;

                }else{
                    $message = "Email et/ou mot de passe incorrect !";
                }

            }else{
                $message = "Email et/ou mot de passe incorrect !";
            }

        }else{
            $message = "L'email n'est pas au bon format !";
        }

    }else{
        $message = "Veuillez remplir tous les champs !";
    }

}

//INCLUDE DE MES VUES

include 'view/index.php';

?>