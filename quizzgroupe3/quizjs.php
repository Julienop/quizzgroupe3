<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
    <title>QUIZ - Accueil</title>
  </head>
  <body>
    <header>
      <div id="header2">
        
        <a href="index.html"><img id="logo" src="logo.png" alt="LOGO" title="Accueil"></a>

        <div id="header3">

        <menu>
          <a href="index.html"><img class="button" src="logoAccueil.png" alt="Accueil" title="Accueil"></a>
          <a href="aPropos.html"><img class="button" src="logoAPropos.png" alt="A propos" title="A propos"></a>
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
      <div id="app">

      </div>
      
      
    </main>
    <div class="quizhtml">
      
      <img src="logojs.png" alt="logohtml"></a>
      <input type="image" src="boutondemarrer.PNG" alt="Bouton" class="demarrer">
    </div>
    

   

    <footer>

      <div id="footer">
        <a href="aPropos.html">
          <input class="buttonTxt" type="button" value="A propos">
        </a>
        <a href="contact.html">
          <input class="buttonTxt" type="button" value="Contact">
        </a>
      </div>

    </footer>
    <script type="module" src="/main.js"></script>
  </body>
</html>