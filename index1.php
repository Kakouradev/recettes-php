<?php
$recettes = [
    [
        'titre' => 'Mayélé ya nazi',
        'recette' => 'Etape 1 : do hou tsoungouwa yé ntsoholé !',
        'auteur' => 'mabdou@exemple.com',
        'is_enabled' => true,
    ],
    [
        'titre' => 'Ndrovi ya bhissiwa',
        'recette' => 'Etape 1 : do wouhouwa yé ndrovi !',
        'auteur' => 'thoma12@exemple.com',
        'is_enabled' => false,
    ],
    [
        'titre' => 'Madjimbi ya nazi na gnama',
        'recette' => 'Etape 1 : do houwadja yé madjimbi !',
        'auteur' => 'issatebir@exemple.com',
        'is_enabled' => true,
    ],
    [
        'titre' => 'Mhoga wa houma na nfi',
        'recette' => 'Etape 1 : do wouhouwa wo mhogo...',
        'auteur' => 'Lita DIOP',
        'is_enabled' => false,
    ],

];

$users = [
    [
        'full_name' => 'Abdou Mohamed',
        'email' => 'mabdou@exemple.com',
        'age' => 34
    ],
    [
        'full_name' => 'Thomas NSOLEY',
        'email' => 'thoma12@exemple.com',
        'age' => 23
    ],
    [
        'full_name' => 'Souleymane Issa Tebir',
        'email' => 'issatebir@exemple.com',
        'age' => 12
    ]

];

function isValidRecette(array $recettes): bool
{
    if (array_key_exists('is_enabled', $recettes)) {
        $is_Enabled = $recettes['is_enabled'];
    } else {
        $is_Enabled = false;
    }
    return $is_Enabled;
};

function getRecettes(array $recettes): array
{
    $validRecettes = [];

    foreach ($recettes as $recette) {
        if (isValidRecette($recette)) {
            $validRecettes[] = $recette;
        }
    }

    return $validRecettes;
};

function displayAuthor(string $authorEmail, array $users)
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
};
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Liste des recettes de cuisine</h1>
        <!-- Boucle sur les recettes -->
        <?php foreach (getRecettes($recettes) as $recette):?>
                <article>
                    <h3><?php echo $recette['titre'];?></h3>
                    <div><?php echo $recette['recette'];?></div>
                    <i><?php echo displayAuthor($recette['auteur'], $users); ?></i>
                </article>
        <?php endforeach; ?>
    </div>
</body>
</html>