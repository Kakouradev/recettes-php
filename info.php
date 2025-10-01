<?php 
// Déclaration du tableau des recettes
$recette = [
    ['Cassoulet','[...]', 'abdou.salim@exemple.com',true,],
    ['Madaba','[...]', 'ali.samir@exemple.com',false,],
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines<= 1; $lines++): ?>
            <li><?php echo $recette[$lines][0].'  ('. $recette[$lines][2]. ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>

   <!-- 
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++): ?>
            <li><?php echo 'Titre : '. $recettes[$lines]['titre'] . '  Auteur : '. '  (  '. $recettes[$lines]['auteur'] . '  )'; ?></li>
        <?php endfor; ?>
    </ul>
          -->