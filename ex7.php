<div class="q q7" id="section7" title="Créez une fonction PHP qui prend une chaîne de caractères en paramètre et retourne le nombre de mots qu'elle contient. Testez ensuite la fonction avec différentes chaînes et affichez le résultat.">
    <h2>Ex 7: Fonction combien de mots?</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section7">
        <label for="phrase">Phrase :</label>
        <input type="text" id="phrase" name="phrase" required>
        <br><br>
        <input type="submit" value="Calculer">
    </form>

<?php
    function compterMots($chaine) {
        // Supprimer les espaces en début et en fin de chaîne
        $chaine = trim($chaine);

        // Si la chaîne est vide, il n'y a pas de mots
        if (empty($chaine)) {
            return 0;
        }

        // Utiliser la fonction str_word_count pour compter les mots
        $nombreMots = str_word_count($chaine);

        return $nombreMots;
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier si la clé du tableau $_POST existe
        if (isset($_POST['phrase'])) {
            // Récupérer la valeur saisie par l'utilisateur
            $phrase = $_POST['phrase'];

            // Appeler la fonction compterMots avec la phrase saisie
            $nombreMots = compterMots($phrase);

            // Afficher le résultat
            echo "Vous avez écrit " . $nombreMots . " mot(s) dans la phrase : " . $phrase . "<br>";
        }
    }

?>
</div>
