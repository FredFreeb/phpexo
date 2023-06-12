<div class="q q4" id="section4" title="Créez une fonction PHP qui prend deux nombres en paramètres et retourne leur somme. Appelez ensuite cette fonction avec différentes valeurs et affichez le résultat (vous pouvez faire les autres opérations).">
    <h2>Ex 4: La fonction qui calcule</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section4">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" id="nombre1" name="nombre1" required>
        <br><br>

        <label for="nombre2">Nombre 2 :</label>
        <input type="text" id="nombre2" name="nombre2" required>
        <br><br>

        <input type="submit" value="Calculer">
    </form>

<?php

    // Est-ce que le formulaire est soumis?
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Est ce que les valeurs sont liées au formulaire?
        if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
            // on recupère alors les valeurs qu'on convertit en float
            $nombre1 = floatval($_POST['nombre1']);
            $nombre2 = floatval($_POST['nombre2']);

            // Est ce que les nombres sont bien rempli en numérique
            if (!empty($nombre1) && !empty($nombre2) && is_float($nombre1) && is_float($nombre2)) {
                //Alors j'utilise la fonction additionner avec les nombres saisis
                $resultat = additionner($nombre1, $nombre2);

                // J'affiche le résultat
                echo "Résultat : " . $resultat;
            }
        }
    }
    // Fonction pour additionner
    function additionner($nombre1, $nombre2) {
        $somme = $nombre1 + $nombre2;
        return $somme;
    }

?>
</div>
