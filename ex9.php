<?php
// Initialiser le message valide
$messageValide = 'Pour accéder à votre espace, veuillez vous identifier!';

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs saisies par l'utilisateur
    $email2 = isset($_POST['email2']) ? $_POST['email2'] : '';
    $motDePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse'] : '';

    // Ouvrir le fichier CSV en lecture
    $fichier = file('assets/PhpClasseurExo.csv');

    // Initialiser une variable pour suivre l'état de l'authentification
    $authentifie = false;

    // Parcourir chaque ligne du fichier CSV
    foreach ($fichier as $ligne) {
        // Diviser la ligne en colonnes
        $colonnes = explode(',', $ligne);

        // Vérifier les informations de connexion
        if ($email2 === trim($colonnes[2]) && $motDePasse === trim($colonnes[3])) {
            // Authentification réussie, enregistrer l'email2 dans une variable de session
            $_SESSION['email2'] = $email2;
            $authentifie = true;
            // Afficher le message de bienvenue
            echo '<script>alert("Bienvenue, ' . $colonnes[0] . ' !");</script>';
            break; // Sortir de la boucle car l'authentification est réussie
        }
    }

    // Vérifier l'état de l'authentification après la boucle
    if (!$authentifie) {
        // Si les informations de connexion sont incorrectes
        $messageErreur = 'Email ou mot de passe incorrect.';
    } else {
        // Si l'authentification est réussie, mettre à jour le message valide
        $messageValide = 'Vous êtes connecté avec succès.';
    }
}
?>

<div class="q q9" id="section9" title="Créez un formulaire de connexion avec un champ pour l'identifiant (nom d'utilisateur) et un champ pour le mot de passe. Vérifiez les informations de connexion côté serveur et, si les informations sont correctes, enregistrez l'identifiant dans une variable de session. Affichez ensuite un message de bienvenue avec l'identifiant de l'utilisateur connecté.">
    <h2>Ex 9: Formulaire de connexion</h2>

    <?php if (isset($messageErreur)) : ?>
        <p class="erreur"><?php echo $messageErreur; ?></p>
    <?php endif; ?>

    <p class="valide"><?php echo $messageValide; ?></p>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>#section9">
        <label for="email2">Email :</label>
        <input type="text" id="email2" name="email2" required>
        <br><br>

        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <br><br>

        <input type="submit" value="Se connecter">
    </form>
</div>
