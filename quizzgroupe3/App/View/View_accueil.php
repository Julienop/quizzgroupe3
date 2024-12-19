<?php
class ViewAccueil{
    private ?string $message;
    private ?string $listUsers;

    public function __construct()
    {
        $this->message = "";
        $this->listUsers = "";
    }

    public function getMessage(){
        return $this->message;
    }
    public function setMessage(?string $newMessage):ViewAccueil{
        $this->message = $newMessage;
        return $this;
    }
    public function getListUsers(){
        return $this->listUsers;
    }
    public function setListUsers(?string $newListUsers):ViewAccueil{
        $this->listUsers = $newListUsers;
        return $this;
    }

    public function cardUser($user):?string{
        ob_start();
?>
        <li><?php echo "{$user['firstname_user']} {$user['name_user']} : {$user['email_user']}"?></li>
<?php
        return ob_get_clean();
    }

    public function render():string{
        ob_start();
?>
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
            <a href="quizhtml.html"><img src="logohtml.png" alt="logohtml"></a>
            </div>
            <div class="css">
            <h2>CSS3</h2>
            <a href="quizcss.html"><img src="logocss.png" alt="logocss"></a>
            </div>
            <div class="javascript">
            <h2>JAVASCRIPT</h2>
            <a href="quizzjs.html"><img src="logojs.png" alt="logo javascript"></a>
            </div>
            <div class="php">
            <h2>PHP</h2>
            <a href="quizphp.html"><img src="logophp.png" alt="logophp"></a>
            </div>
            </div>

    </main>
<?php
        return ob_get_clean();
    }
}
?>