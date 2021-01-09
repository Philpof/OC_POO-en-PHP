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
        require 'Personnage.php';

        $perso1 = new Personnage;
        $perso1->setForce(random_int(10, 20));
        $perso2 = new Personnage;
        $perso2->setForce(random_int(10, 20));
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