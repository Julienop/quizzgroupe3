<?php
class ViewHeader{
    private ?string $nav;

    public function __construct(?string $nav)
    {
        $this->nav = $nav;
    }

    public function getNav(){
        return $this->nav;
    }
    public function setNav(?string $newNav):ViewHeader{
        $this->nav = $newNav;
        return $this;
    }

    public function render():string{
        ob_start();
?>
        <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
        <title>QUIZ - Accueil</title>
    </head>
    <body>
        <header>
            <div id="header2">
        
            <a href="index.html"><img id="logo" src="./Media/logo.png" alt="LOGO" title="Accueil"></a>

            <div id="header3">

            <menu>
                <a href="index.html"><img class="button" src="./Media/logoAccueil.png" alt="Accueil" title="Accueil"></a>
                <a href="aPropos.html"><img class="button" src="./Media/logoAPropos.png" alt="A propos" title="A propos"></a>
                <div class="champs">
                    <input id="identifiant" class="champ" type="text" placeholder="Email">
                    <p></p>
                    <input id="motDePasse" class="champ" type="password" placeholder="Mot de passe">
                    <a class="oubli" href="index.html">Mot de passe oublié ?</a>
                </div>
                <div class="champs">

                <button class="buttonTxt" onclick="connexion();">Connexion</button>
                <p>Ou</p>
                <a href="CrétionCompte.html"><input class="buttonTxt" type="button" value="S'inscrire"></a>

            </menu>

            </div>

        </header>
<?php
        return ob_get_clean();
    }
}
?>