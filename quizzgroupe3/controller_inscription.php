<?php
/*****************************
 * MON CONTROLLER DE L'ACCUEIL
******************************/
//IMPORT DES RESSOURCES
//Include de mon fichier de fonctions utilitaires
include './Utils/functions.php';
//Include de mon modèle
include './models/model_inscription.php';

//DECLARATION DES VARIABLES D'AFFICHAGES
$message = '';
$listeUsers = '';

///////////////////////////////
//INSCRIPTION D'UN UTILISATEUR
///////////////////////////////

//Vérifier que je reçois le formulaire d'incription
if(isset($_POST['submit'])){
    //Vérifie que les données ne sont pas vides
    if(isset($_POST['lastname']) && !empty($_POST['lastname'])
    && isset($_POST['firstname']) && !empty($_POST['firstname'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])
    && isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])){

            //Vérifier que le mail est au bon format
            if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

                    //Vérifie que les 2 mots de passe correspondent
                    if($_POST['password'] === $_POST['confirm_password']){

                            //Nettoyage des données
                            $lastname = sanitize($_POST['lastname']);
                            $firstname = sanitize($_POST['firstname']);
                            $email = sanitize($_POST['email']);
                            $password = sanitize($_POST['password']);
                            $confirm_password = sanitize($_POST['confirm_password']);

                            //Hasher le mot de passe
                            $password = password_hash($password, PASSWORD_BCRYPT);

                            //Vérifier si l'utilisateur est déjà enregistré ou pas en BDD
                            //Instancier notre objet de connexion
                            $bdd = connect();

                            $data = readUserByMail($bdd,$email);

                            //Vérifie si $data est vide, pour savoir si l'email est disponible à l'enregistrement
                            if(empty($data)){
                                        
                                //On commence à enregistrer le compte, car l'email est disponible
                                $message = addUser($bdd,$firstname,$lastname,$email,$password);

                            }else{
                                $message = "Cet email est déjà utilisé par un autre compte !";
                            }

                    }else{
                        $message = "Vos deux mots de passe ne correspondent pas !";
                    }

            }else{
                $message = "Votre email n'est pas au bon format !";
            }

    }else{
        $message = "Veuillez remplir tous les champs !";
    }
}

///////////////////////////////
//AFFICHAGE DES UTILISATEURS
///////////////////////////////

//Récupération des utilisateurs en BDD
//Création l'objet de connexion
$bdd = connect();

//Je lance la fonction pour récupérer les données de mes utilisateurs
$data = readUsers($bdd);

//Je parcours mon tableau de donné $data, pour générer l'affichage de chaque utilisateur
foreach($data as $user){
    $listeUsers = $listeUsers."<li>{$user['firstname']} {$user['lastname']} : {$user['email']}</li>";
}

//INCLUDE DE MON AFFICHAGE

include './view/CrétionCompte.php';

?>