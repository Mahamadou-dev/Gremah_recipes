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
                'author' => 'mickael.andrieu@exemple.com',
            ],
            [
                'title' => 'Couscous',
                'author' => 'mickael.andrieu@exemple.com',
            ],
            [
                'title' => 'Escalope milanaise',
                'author' => 'mathieu.nebra@exemple.com',
            ],
            [
                'title' => 'Salade Romaine',
                'author' => 'laurene.castor@exemple.com',
            ],
        ];
        $lines2 = 4; // nombre d'utilisateurs dans le tableau
        $counter2 = 0;
        while ($counter2 < $lines2) {
            echo $recipes[$counter2]['title'] . ' ' . $recipes[$counter2]['author'] . '<br />';
            $counter2++;
        }
    ?>
    
</body>
</html>