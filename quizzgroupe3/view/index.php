<<<<<<< HEAD
<?php
session_start();
?>

=======
>>>>>>> 609876689633d730fdd5e5ac9a68344e7eaced7b
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
    <title>QUIZ - Accueil</title>
  </head>
  <body>
    <header>
      <div id="header2">
        
        <a href="index.php"><img id="logo" src="image/logo.png" alt="LOGO" title="Accueil"></a>

        <div id="header3">

        <menu>
          <a href="index.php"><img class="button" src="image/logoAccueil.png" alt="Accueil" title="Accueil"></a>
          <a href="aPropos.php"><img class="button" src="image/logoAPropos.png" alt="A propos" title="A propos"></a>
<<<<<<< HEAD
         
              <p><?php echo $message; ?></p>
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
            <a href="../quizzgroupe3/controller_inscription.php"><input class="buttonTxt" name="submit" type="button" value="S'inscrire"></a>
            
          
            
=======
          <p><?php echo $message ?></p>
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
          <a href="controller_inscription.php"><input class="buttonTxt" name="submit" type="submit" value="S'inscrire"></a>

>>>>>>> 609876689633d730fdd5e5ac9a68344e7eaced7b
        </menu>

        </div>

    </header>
<<<<<<< HEAD
    
    <main>
      <div id="arianeSearch">
        <input id="search" type="search" placeholder=" &#128269 Recherche">
      </div>
      <div id="app"></div>
      <h1>Choisissez votre thème</h1>
      <div class="logos">
        <div class="html">
          <h2>HTML5</h2>
          <a href="quizhtml.php"><img src="image/logohtml.png" alt="logohtml"></a>
        </div>
        <div class="css">
          <h2>CSS3</h2>
          <a href="quizcss.php"><img src="image/logocss.png" alt="logocss"></a>
        </div>
        <div class="javascript">
          <h2>JAVASCRIPT</h2>
          <a href="quizzjs.php"><img src="image/logojs.png" alt="logo javascript"></a>
        </div>
        <div class="php">
          <h2>PHP</h2>
          <a href="quizphp.php"><img src="image/logophp.png" alt="logophp"></a>
        </div>
      </div>
    </main>

    <footer>
=======

    <main>

      <div id="arianeSearch">
        <input id="search" type="search" placeholder=" &#128269 Recherche">
      </div>
      <div id="app">

      </div>
      <h1>Choisissez votre thème</h1>
      <div class="logos">
    <div class="html">
      <h2>HTML5</h2>
      <a href="quizhtml.php"><img src="image/logohtml.png" alt="logohtml"></a>
    </div>
    <div class="css">
      <h2>CSS3</h2>
      <a href="quizcss.php"><img src="image/logocss.png" alt="logocss"></a>
    </div>
    <div class="javascript">
      <h2>JAVASCRIPT</h2>
      <a href="quizzjs.php"><img src="image/logojs.png" alt="logo javascript"></a>
    </div>
    <div class="php">
      <h2>PHP</h2>
      <a href="quizphp.php"><img src="image/logophp.png" alt="logophp"></a>
    </div>
      </div>

    </main>
    

    <footer>

>>>>>>> 609876689633d730fdd5e5ac9a68344e7eaced7b
      <div id="footer">
        <a href="aPropos.php">
          <input class="buttonTxt" type="button" value="A propos">
        </a>
        <a href="contact.php">
          <input class="buttonTxt" type="button" value="Contact">
        </a>
      </div>
<<<<<<< HEAD
    </footer>
    <script type="module" src="/main.js"></script>
  </body>
</html>
=======

    </footer>
    <script type="module" src="/main.js"></script>
  </body>
</html>
>>>>>>> 609876689633d730fdd5e5ac9a68344e7eaced7b
