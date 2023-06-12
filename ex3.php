<div class="q q3" id="section3" title="Créez un tableau PHP contenant les noms de cinq personnes. Parcourez le tableau à l'aide d'une boucle et affichez chaque nom sur une nouvelle ligne.">
    <h2>Ex 3: Tableau des noms</h2>
<?php

    // Création du tableau de noms
    $noms = array("Aziza", "Sabri", "Anastasia", "Maxime", "Thomas");

    // Parcours du tableau et afficher chaque nom sur une nouvelle ligne
    foreach ($noms as $nom) {
        echo $nom . "<br>";
    }

?>
    
</div>