<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
</head>
<body>
    <h1>Découverte de PHP</h1>

    <?php
// Pour ouvrir un bloc de PHP on utilise la balise ouvrante <?php
// Pour fermer un bloc de PHP, on utilise la balise fermante:
    ?>

    <p> Je suis du HTML</p>

    <?php
echo "<h2> Les commentaire</h2>";
// Je suis un commenatire en PHP

# Je suis également un commentaire en PHP (désuet)

/*
Je suis un commentaire
sur plusieurs
ligne
*/

echo "<h2> Affichage</h2>";

// Echo et Print  sont des instructions permettant d'afficher du texte dans le navigateur
echo "Hello, World !";
echo"<br>";
print "Hello, World !";
echo"<br>";
// Déclaration d'une variable avec le signe $
$uneVariable;

// Affectation d'une valeur à une variable 
$uneVariable = 127;

// Affichage de la variable 

echo $uneVariable;
echo"<br>";

$prenom ='Oura';

echo'Bonjour' .$prenom;
echo"<br>";

echo"Bonjour $prenom";
echo"<br>";

echo"Bonjour {$prenom}";

// Les types de variables

echo '<h2> Les différents types de variables</h2>';

// Les chaînes de caractères

$unMessage = 'Salut tout le monde, je suis une variable';

echo gettype($unMessage);
echo"<br>";

$unNombreEntier = 208;
echo gettype($unNombreEntier);
echo"<br>";


$unNombreVirgule = 208.4;
echo gettype($unNombreVirgule);
echo"<br>";

$unBoolean = true;
echo $unBoolean;
echo"<br>";
echo gettype($unBoolean);
echo"<br>";

$uneVariableNull = null;
echo gettype($uneVariableNull);
echo"<br>";

$unTableau =['fraise','framboise','myrtille'];
$autreTableau = array('fraise','framboise','myrtille');
echo gettype ($unTableau);
echo '<br>';
echo $unTableau[0];
echo '<br>';
echo $autreTableau [1];

$unTableauAssociatif =['prenom' => 'Oura', 'nom' => 'Diarra'];
echo '<br>';

echo $unTableauAssociatif['prenom'];
echo '<br>';

echo '<pre>';
var_dump($unTableauAssociatif);
echo '</pre>';


// phpinfo() : avoir des infos sur ma version de PHP etc;

?>


<!-- Créer une fonction debug, un parametre --> 
<!-- Afficher les balises pre et la variable sera ce que l'on met dans le var_dump -->

 <pre>

 <?php var_dump($unTableauAssociatif);?>
</pre>


<?php

function debug ($variable){
echo '<pre>';
var_dump($variable);
echo '</pre>';
}

debug($unTableauAssociatif);

echo '<h2>Les variables Globales</h2>';

debug($GLOBALS ['prenom']);

echo $_SERVER['REQUEST_TIME'] + 100;

echo '<h2> Les constantes et les constantes magiques </h2>';

// Une constante permet de sauvegarder uen valeur sauf que celle-ci est immuable.
// Utile pour conserver les paramètres de la base de donnée

define('CAPITAL_PAYS', 'Bamako');
echo CAPITAL_PAYS;
echo '<br>';

const PAYS ='Mali';
echo PAYS;
echo '<br>';

// AFFICHER LA VERSION DE PHP

echo PHP_VERSION;
echo '<br>';
// Afficher le numéro de ligne  sur laquelle on est 

echo __LINE__;
echo '<br>';

// Le chemin du fichier
echo __FILE__;
echo '<br>';
// Le dossier courant 

echo __DIR__;
echo '<br>';



// Afficher la valeur maximum d'un entier 
 echo PHP_INT_MAX;
 echo '<br>';
// Afficher la valeur minimum d'un entier 

 echo PHP_INT_MIN;
 echo '<br>';

//  Déclarer 3 variables bleu, blanc, rouge
// Afficher bleu-banc-rouge avec les syntaxes

$blue ='bleu';
$white = 'blanc';
$red ='rouge';
echo $blue . "-" .$white. "-" .$red. "<br>";
echo "{$blue}-{$white}-{$red}<br>";




// Afficher Bonjour je m'appelle Oura Diarra, j'ai 23 ans et mon numéro de téléphone est le 06.52.91.27.92.
$info =[
'name' =>'Oura',
'lastName' =>'Diarra',
'age' =>23,
'number' =>'06.52.91.27.92'
];


echo "Bonjour je m'appelle {$info['name']} {$info['lastName']}, j'ai {$info['age']} ans et mon numéro de téléphone est le {$info['number']}";
echo '<br>';


    // Déclarer un tableau d'animaux chien, tigre, lion, aigle

$animals =['chien', 'chat', 'tigre','lion'];

    // Fonction qui transforme un tableau en chaine de caractere
    // Afficher 'Mes animaux préférés sont : chien, tigre, lion, aigle'

    echo "Mes animaux favs sont les : ". ' ' .implode(' ', $animals);

    echo '<h2>Les boucles</h2>';

    for ($i=0; $i<5; $i++){
        echo $i . '<br>';
    }

    for ($i=0; $i<count($animals); $i++){
        echo $animals[$i]. '<br>';
    }
echo count($animals);
echo '<br>';
 
    // Boucler sur le tableau d'animaux pour afficher tous les animaux


    foreach ($animals as $valeur) {
    echo ($valeur. "<br>");
    }
    echo '<br>';

    foreach($info as $key =>$infos){
       if($key == 'number'){
        echo $infos;
       }
    }
    echo '<br>';
//Indiana Jones reçoit la visite surprise de sa filleule Helena Shaw, qui est à la recherche d'un artefact rare que son père a confié à Indiana par le passé : le fameux cadran d'Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles.

// declarez une variable description qui va contenir le texte

$description ="Indiana Jones reçoit la visite surprise de sa filleule Helena Shaw, qui est à la recherche d'un artefact rare que son père a confié à Indiana par le passé : le fameux cadran d'Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles.";

// extraire 100 premier caractere suivi de ...
echo substr ($description,0,100) . "...";
echo '<br>';

// Supprime les espaces au début et à la fin de la chaine de caractère

$message = ' edjek@gmail.com ';
$message= trim($message);
echo $message;
echo '<br>';

// Remplace une chaine de caractère par une autre Paul par Rachid
$message = "Bonjour, je m'appelle Paul. Je suis formateur.";
$message = str_replace('Paul', 'Rachid', $message);
echo $message; 
echo '<br>';

// mettre en minuscule $message

$message = strtolower($message);
echo $message;
echo '<br>';

// mettre en majuscule $message
$message = strtoupper($message);
echo $message;  
echo '<br>';


?>

</body>
</html>