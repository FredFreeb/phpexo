<div class="q q2" id="section2" title="Créez un formulaire HTML contenant un champ de texte. Lorsque le formulaire est soumis, récupérez la valeur saisie dans le champ de texte et affichez-la à l'aide de PHP.">    
    <h2>Ex 2: Formulaire</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section2">
        <label for="surnom">C'est quoi votre petit nom ?</label>
        <input type="text" id="surnom" name="surnom" required>
        <br><br>
        <input type="submit" value="Envoyer">
    </form>

<?php

    $surnom = isset($_POST["surnom"]) ? $_POST["surnom"] : "";
    if (!empty($surnom)) {
    echo "<h2>Bonjour, $surnom !</h2>";
    }

?>
</div>