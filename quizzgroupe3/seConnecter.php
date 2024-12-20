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
    <title>QUIZ - Se connecter</title>
  </head>
  <body>
    <header>
      <div id="header2">
        
        <a href="index.php"><img id="logo" src="logo.png" alt="LOGO" title="Accueil"></a>

        <div id="header3">

        <menu>
          <a href="index.php"><img class="button" src="logoAccueil.png" alt="Accueil" title="Accueil"></a>
          <a href="aPropos.php"><img class="button" src="logoAPropos.png" alt="A propos" title="A propos"></a>
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
          <a href="CrétionCompte.php"><input class="buttonTxt" name="submit" type="submit" value="S'inscrire"></a>

        </menu>

        </div>

    </header>

    <main>

      <div id="arianeSearch">
        <input id="search" type="search" placeholder="Recherche">
      </div>
      <div>
        <form method="post" action="">

                <label for="Pseudo">Email :</label>
                <input type="email" name="Email" placeholder="Email" maxlength="30" id="Email" class="champ">
            <br>
                <label for="Pseudo">Mot de passe :</label>
                <input type="password" name="Mot de passe" placeholder="Mot de passe" maxlength="30" id="Mot de passe" class="champ"><br>
            <br>
                <input class="buttonTxt" type="button" value="Confirmer">
        </form>
        
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
