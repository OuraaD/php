<?php 
require_once '../config/bdd.php';
$dec=$pdo->prepare("SELECT * FROM book JOIN author ON book.id_auteur=author.id WHERE book.id= :id");
$dec->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
$dec->execute();
$decbooks=$dec->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour</h1>
<?php echo $decbooks['description']?>
</body>
</html>
