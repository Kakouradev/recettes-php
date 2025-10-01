<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre première instruction : echo</title>
</head>

<body>
    <h2>Affichage de texte avec PHP</h2>
    <p>
        Cette ligne a été écrite entièrement en HTML. <br />
        <?php
        echo "Celle-ci a été écrite entièrement en <strong>PHP</strong>."; ?>
    </p>

    <h2>Afficher la date avec PHP</h2>
    <p>
        Aujourd'hui nous sommes le <?php
                                    date_default_timezone_set('Africa/Dakar');
                                    echo date('d/m/Y h:i:s'); ?>
    </p>

    <h2>Calculer le nombre de caractères d'une chaînes de caractère</h2>
    <?php
    $recette = "Aliou va à l'école.";
    $taille = strlen($recette);

    echo 'La phrase ci-dessous comporte ' . $taille . ' caractères : '  . $recette;

    ?>

    <h2>Formater une chaîne de caractère avec sprintf</h2>

    <?php
    $plat = [
        '$titre' => 'Pizza italienne',
        '$recette' => 'Etape 1 : préparer la pate avec de la farine ! Etape 2 : euh...',
        '$auteur' => 'nebra.antony@exemple.com',
        '$is_enabled' => true,
    ];

    // 2 eme exemple 
    $mayeleYaNazi = [
        '$titre' => 'Mayélé ya nazi',
        '$recette' => 'Etape 1 : laver le riz avec de l\'eau propre ! Etape 2 : euh...',
        '$auteur' => 'bouki.diop@exemple.com',
        '$is_enabled' => true,
    ];

    // 3 eme exemple
    $MhogoWaHouma = [
        '$titre' => 'Mhogo wa houma na nfi',
        '$recette' => 'Etape 1 : épluchez le manioc ! Etape 2 : euh...',
        '$auteur' => 'lita.dupont@exemple.com',
        '$is_enabled' => false,

       
    ];


    echo sprintf(
        '%s par %s : %s',
        $plat['$titre'],
        $plat['$auteur'],
        $plat['$recette'],
    );
    ?>

    
    
    <h2>Afficher et récupérer la date</h2>
    <?php
    $date = date('d/m/Y');
    echo ($date);
    ?>

    <h2>Afficher l'heure</h2>
    <?php
    $heure = date('h:i:s');
    echo ($heure);
    ?>

    <h2>Afficher la date complète</h2>
    <?php
    $jour = date('d');
    $mois = date('m');
    $annee = date('Y');

    $heure = date('h');
    $minute = date('i');
    $seconde = date('s');

    echo 'Bonjour à tous ! Aujourd\'hui, nous somme le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure . ' h ' . ' : ' . $minute . ' m ' . ' : ' . $seconde . ' s';
    ?>

    <h2>Une autre méthode pour afficher la date complète</h2>
    <?php
    $jour = date('d/m/Y');


    $heure = date('H \h i');

    echo "Bonjour à tous ! Aujourd'hui nous somme le {$jour} et il est {$heure} ";
    ?>




</body>

</html>