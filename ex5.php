<div class="q q5" id="section5" title="Créez un script PHP qui génère un nombre aléatoire entre 1 et 10. Demandez ensuite à l'utilisateur de deviner le nombre généré. Affichez un message indiquant si la devinette est correcte ou non.">
    <h2>Ex 5: Devinez le nombre entre 1 et 10</h2>

<?php

    // Vérifier si le chiffre a déjà été généré
    if (!isset($_SESSION["nombreAleatoire"])) {
        genererNouveauNombreAleatoire();
    }

    // Vérifier si le chiffre a été deviné
    if (isset($_POST["devinette"])) {
        $devinette = $_POST["devinette"];
        $nombreAleatoire = $_SESSION["nombreAleatoire"];

        if ($devinette == $nombreAleatoire) {
            echo "Félicitations ! Vous avez deviné le bon nombre.<br>";
            genererNouveauNombreAleatoire();
        } else {
            echo "Désolé, le chiffre était $nombreAleatoire. Essayez encore.<br>";
        }
    }

    function genererNouveauNombreAleatoire() {
        $_SESSION["nombreAleatoire"] = rand(1, 10);
    }

?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section5">
        <label for="devinette">Votre chiffre :</label>
        <br>
        <input type="number" id="devinette" name="devinette" min="1" max="10" required>
        <br><br>
        <input type="submit" value="Devinez">
    </form>

</div>
