<?php
class ViewFooter{
    public function render():string{
        ob_start();
?>
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
    <script src="connexion.js"></script>
    </body>
</html>
<?php
        return ob_get_clean();
    }
}
?>
