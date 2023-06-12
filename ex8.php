<div class="q q8" id="section8">
<!-- h2 avec enoncé-->
    <h2 title="Créez un script PHP qui récupère la date et l'heure actuelles et les affiche dans un format lisible pour les humains, par exemple &quot;Mardi 31 mai 2023, 14:30&quot;">Ex 8: Date pour nous les humains</h2>

<?php
    // Définir le fuseau horaire
    date_default_timezone_set('Europe/Paris');

    // Récupérer la date actuelle
    $dateActuelle = new DateTime();

    // Définir le tableau des noms de jours de la semaine en français
    $joursSemaine = array(
        'Sunday' => 'Dimanche',
        'Monday' => 'Lundi',
        'Tuesday' => 'Mardi',
        'Wednesday' => 'Mercredi',
        'Thursday' => 'Jeudi',
        'Friday' => 'Vendredi',
        'Saturday' => 'Samedi'
    );

    // Définir le tableau des mois en français
    $mois = array(
        'January' => 'Janvier',
        'February' => 'Février',
        'March' => 'Mars',
        'April' => 'Avril',
        'May' => 'Mai',
        'June' => 'Juin',
        'July' => 'Juillet',
        'August' => 'Août',
        'September' => 'Septembre',
        'October' => 'Octobre',
        'November' => 'Novembre',
        'December' => 'Décembre'
    );

    // Formater la date en français
    $jourSemaine = $joursSemaine[$dateActuelle->format('l')];
    $jourMois = $dateActuelle->format('d');
    $moisAnnee = $mois[$dateActuelle->format('F')];
    $annee = $dateActuelle->format('Y');

    // Récupérer l'heure actuelle
$heureActuelle = $dateActuelle->format('H:i');

// Afficher la date et l'heure
echo "Nous sommes le $jourSemaine $jourMois $moisAnnee $annee,"." il est : $heureActuelle.";
?>
</div>
