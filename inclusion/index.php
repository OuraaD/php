<?php
$title = "Bienvenue sur la page d'accueil";
include './header.php';
?>

<main> 
    <p>Bonjour tout le monde</p>
    <nav>
    <a href="./index.php">Accueil</a>
    <a href="./contact.php">Page Contact</a>
</nav>

<?php
$nom= "Diarra";
$prenom="Oura";
$adresse="18 rue Nelson Mandela"
?>

<a href="./get.php?nom='Diarra'?prenom='Oura'?adresse='18 rue Nelson Mandela '">Lien vers autre page</a>

</main>

<?php
include './footer.php';
?>



