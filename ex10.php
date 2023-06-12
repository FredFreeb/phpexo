<div class="q q10" id="section10" title="Créez un fichier CSV contenant une liste de noms et d'adresses e-mail. À l'aide de PHP, lisez le contenu du fichier CSV et affichez-le sous forme de tableau HTML.">
    <h2>Ex 10: Csv</h2>
    <div class="table-container">
        <table class="table">
<?php
    // Chemin vers le fichier CSV
    $cheminFichierCSV = 'assets/PhpClasseurExo.csv';
    // Lire le contenu du fichier CSV
    if (($fichierCSV = fopen($cheminFichierCSV, 'r')) !== false) {
        // Créer le tableau HTML avec des classes CSS pour le style
        echo '<table class="table">';
        echo '<thead><tr><th>Prénom</th><th>Nom</th><th>Adresse e-mail</th></tr></thead>';
        echo '<tbody>';

        // Parcourir chaque ligne du fichier CSV
        while (($donnees = fgetcsv($fichierCSV)) !== false) {
            // Afficher les données dans une ligne du tableau
            echo '<tr>';
            echo '<td>' . $donnees[0] . '</td>';
            echo '<td>' . $donnees[1] . '</td>';
            echo '<td>' . $donnees[2] . '</td>';
            echo '</tr>';
        }

        // Fermer le tableau HTML
        echo '</tbody></table>';

        // Fermer le fichier CSV
        fclose($fichierCSV);
    } else {
        echo 'Impossible de lire le fichier CSV.';
    }
?>
        </table>
    </div>
</div>
