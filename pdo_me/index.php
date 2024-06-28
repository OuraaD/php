<?php

include_once './src/repository/book.php';

// var_dump($books)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie Digitale</title>
</head>

<body>
    <!-- afficher tous les livres dans une div qui aura un h2 avec le titre du livre et un paragraphe avec la description et un autre p avec la date de parution -->
    <?php

    foreach ($books as $value) { ?>
        <div>
            <h1>Librairie Digitale</h1>
            <h2><?= $value['nom'] ?></h2>
            <p><?= substr($value['description'], 0, 20)
             ?></p>
            <!-- Afficher les 20 premier caractères de la description suivie de point de suspension. -->
            <p><?= $value['annee_parution'] ?></p>
            <!-- Ajouter un lien vers la page detail ou on fait passer l'id du livre -->
            <a href="./src/suppport/detail.php?id=<?= $value['id']?>">Clique pour en savoir +</a>
       
        </div>
    <?php } ?>
</body>

</html>