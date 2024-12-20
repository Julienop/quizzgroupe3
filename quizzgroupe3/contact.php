<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
    <title>QUIZ - Contact</title>
    </head>
    <body>
    <header>
        <div id="header2">
        
        <a href="index.php"><img id="logo" src="image/logo.png" alt="LOGO" title="Accueil"></a>

        <div id="header3">

        <menu>
            <a href="index.php"><img class="button" src="image/logoAccueil.png" alt="Accueil" title="Accueil"></a>
            <a href="aPropos.php"><img class="button" src="image/logoAPropos.png" alt="A propos" title="A propos"></a>
            <form method="POST" action="">
          <div class="champs">
            <input class="champ" type="text" name="email" placeholder="Login">
            <p></p>
            <input class="champ" type="password" name="password" placeholder="Mot de passe">
            <a class="oubli" href="index.php">Mot de passe oublié ?</a>
          </div>
          <div class="champs">
          <input class="buttonTxt" name="submitCo" type="submit" value="Connexion">
          </form>
            <p>Ou</p>
            <a href="CrétionCompte.php"><input class="buttonTxt" type="button" value="S'inscrire"></a>

        </menu>

        </div>

    </header>

    <main>

        <div id="arianeSearch">
        <input id="search" type="search" placeholder=" &#128269 Recherche">
        </div>
        <div class="textecontact">
        <h1>Nous contacter</h1>
        <h3>Vous souhaitez contacter l'équipe?</h3>
        <h3>Vous pouvez remplir le formulaire ci-dessous pour entrer en contact avec notre équipe :</h3>
        </div>
        <div class="name">
            <input type="name" class="Nom" placeholder="Nom*" required >
        </div>
        <div class="lastname">
            <input type="prenom" class="Prenom" placeholder="Prenom*" required>
        </div>
        <div class="email">
            <input type="email"  class="mail" placeholder="Email*" required>
        </div>
        <div class="objet">
            <input type="text"  class="message" placeholder="Objet du message*" required>
        </div>
        <div class="zone">
            <input type="button" value="Envoyer">
            <textarea name="Message" class="zonedetexte" placeholder="Message*"></textarea>
            
        </div>
       
       
    </main>

    <footer>

    <div id="footer">
        <a href="aPropos.php">
            <input class="buttonTxt" type="button" value="A propos">
        </a>
        <a href="contact.php">
            <input class="buttonTxt" type="button" value="Contact">
        </a>
        </div>

    </footer>
    <script type="module" src="/main.js"></script>
    </body>
</html>