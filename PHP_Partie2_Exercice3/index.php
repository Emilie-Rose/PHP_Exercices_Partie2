<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 3</h2>
    <p style="color:#8080FF">Créez une variable initialisé à 1. Tant que 
    cette variable n'a pas atteint 15, affichez 'On y est presque'.</p>
    <?php
        $a = 1;
        while ($a <= 15) {
            echo 'On y est presque <br />';
            $a++;
        }
    ?>

</body>
</html>
