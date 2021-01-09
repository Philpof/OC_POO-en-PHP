<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Philippe PERECHODOV">
    <title>OC_POO en PHP</title>
</head>

<body>

    <?php
        // Autoloader
        function chargerClasse($classe)
            {
            require $classe . '.php';
            }

        spl_autoload_register('chargerClasse');

        $perso1 = new Personnage(3);
        $perso2 = new Personnage(2);
        echo 'Fiche de base :<br>';
        $perso1->parler("1");
        $perso1->ATH("1");
        $perso2->parler("2");
        $perso2->ATH("2");
        echo 'Combat, tour n°1 :<br>';
        $perso1->frapper($perso2);
        $perso1->gagnerExperience();
        $perso1->ATH("1");
        $perso2->ATH("2");
        echo 'Combat, tour n°2 :<br>';
        $perso2->frapper($perso1);
        $perso2->gagnerExperience();
        $perso1->ATH("1");
        $perso2->ATH("2");
        

    ?>

</body>
</html>