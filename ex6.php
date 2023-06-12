<?php

$erreurs = array();
$messageSucces = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $motDePasse = isset($_POST["motDePasse"]) ? $_POST["motDePasse"] : "";

    if (empty($prenom) || empty($nom) || empty($email) || empty($motDePasse)) {
        $erreurs[] = "Veuillez remplir tous les champs.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Veuillez saisir une adresse e-mail valide.";
    }

    // Si aucune erreur, vérifier si l'adresse e-mail est déjà enregistrée
    if (empty($erreurs)) {
        $fichier = file('assets/PhpClasseurExo.csv');

        foreach ($fichier as $ligne) {
            $colonnes = explode(',', $ligne);
            if (trim($email) === trim($colonnes[2])) {
                $erreurs[] = "Cette adresse e-mail est déjà enregistrée.";
                break;
            }
        }

        // Si aucune erreur, enregistrer les données dans le fichier CSV
        if (empty($erreurs)) {
            $nouvelleLigne = array($prenom, $nom, $email, $motDePasse);

            // Ouvrir le fichier CSV en mode append
            $fichier = fopen("assets/PhpClasseurExo.csv", "a");

            // Vérifier si toutes les valeurs de la ligne sont non vides
            if (!in_array("", $nouvelleLigne, true)) {
                // Écrire la nouvelle ligne dans le fichier CSV
                fputcsv($fichier, $nouvelleLigne);
            }

            // Fermer le fichier
            fclose($fichier);

            $messageSucces = "Inscription réussie ! Bienvenue $prenom.";
        }
    }
}

?>

<div class="q q6" id="section6" title="Créez un formulaire d'inscription avec des champs tels que le nom, l'adresse e-mail et le mot de passe. Validez les entrées côté serveur en vérifiant que tous les champs sont remplis et que l'adresse e-mail est valide. (un peu de recherche à faire)">
    <h2>Ex 6: Formulaire d'inscription</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section6">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <br>
        <br>
        <input type="submit" value="S'inscrire">
    </form>

    <?php if (!empty($erreurs)) : ?>
        <ul class="erreurs">
            <?php foreach ($erreurs as $erreur) : ?>
                <li><?php echo $erreur; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (!empty($messageSucces)) : ?>
        <p><?php echo $messageSucces; ?></p>
    <?php endif; ?>
</div>
