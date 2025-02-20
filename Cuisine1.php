<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Recettes</title>
</head>
<body>
    <?php
        $users = [
            [
                'full_name' => 'Mickaël Andrieu',
                'email' => 'mickael.andrieu@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Mathieu Nebra',
                'email' => 'mathieu.nebra@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Laurène Castor',
                'email' => 'laurene.castor@exemple.com',
                'age' => 28,
            ],
        ];
        $lines1 = 3; // nombre d'utilisateurs dans le tableau
        $counter1 = 0;
        while ($counter1 < $lines1) {
            echo $users[$counter1]['full_name'] . ' ' . $users[$counter1]['email'] . '<br />';
            $counter1++;
        }
        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => 'Etape 1 : des flageolets !',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => 'Etape 1 : de la semoule',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => 'Etape 1 : prenez une belle escalope',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
        ];
        
        foreach ($recipes as $recipe) {
            echo $recipe['title'] . ' ' . $recipe['author'] . '<br />';
        }
    ?>
    
</body>
</html>