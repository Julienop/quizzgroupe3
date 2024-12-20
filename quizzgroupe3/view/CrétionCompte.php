<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
    <title>QUIZ - Créer compte</title>
  </head>
  <body>
    <header>
      <div id="header2">
        
        <a href="index.php"><img id="logo" src="image/logo.png" alt="LOGO" title="Accueil"></a>

        <div id="header3">

        <menu>
          <a href="index.php"><img class="button" src="image/logoAccueil.png" alt="Accueil" title="Accueil"></a>
          <a href="aPropos.php"><img class="button" src="image/logoAPropos.png" alt="A propos" title="A propos"></a>
          <div class="champs">
            <input class="champ" type="text" placeholder="Login">
            <p></p>
            <input class="champ" type="text" placeholder="Mot de passe">
            <a class="oubli" href="index.php">Mot de passe oublié ?</a>
          </div>
          <div class="champs">
          <input class="buttonTxt" type="button" value="Connexion">
          <p>Ou</p>
          <a href="../CrétionCompte.php"><input class="buttonTxt" type="button" name="submit" value="S'inscrire"></a>

        </menu>

        </div>

    </header>

    <main>

      <div id="arianeSearch">
        <input id="search" type="search" placeholder="Recherche">
      </div>
      <div>
      <form  class="forminscription" method="POST" action="">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="lastname" required><br><br>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="email">Email :</label>
        <input type="type" id="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirmez le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <br>
                <p>Vous avez déjà un compte ? <a class="oubli" href="seConnecter.php">Se connecter</a></p>
                <input class="buttonTxt"  name="submit" type="submit" value="Confirmer">
        </form>
        <p><?php echo $message ?></p>
        
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
