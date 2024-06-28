<?php
require_once './src/config/bdd.php';

$res = $pdo->prepare("SELECT * FROM book");
$res->execute();
$books = $res->fetchAll();
?>
