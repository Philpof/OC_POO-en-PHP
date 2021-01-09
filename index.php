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

        $perso = new Personnage;
        $perso->parler();

    ?>

</body>
</html>