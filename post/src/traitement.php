<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['name']) && isset($_POST['pswd']) && !empty($_POST['name']) && !empty($_POST['pswd'])){
        $name=trim($_POST['name']);
        $pswd=trim($_POST['pswd']);
        
        $pswd = password_hash($pswd, PASSWORD_DEFAULT);
      


// Je veux sauvegarder un message en session afin de l'afficher sur la page d'accueil.

        header('Location:./index.php');
        exit;
    }else{

        header('Location:./index.php');
        exit;
    }
}else{
        header ('Location:
        
        ./index.php');
        exit;
    }

?>