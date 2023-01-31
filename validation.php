<?php
// connexion à la base
require_once("connection.php");



if (empty($_POST['Name']) || empty($_POST['Firstname']) || empty($_POST['Email']) || empty($_POST['Comments'])) {
    echo '<p class="Error">Attention, you must fill out all fields."</p>';
} else {
    $name = trim($_POST['Name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);
        if (!preg_match("/^[a-zA-Z]+$/",$_POST["Name"])) {
            echo"The name is not valid, it must only contain alphanumeric characters.";
    exit();
        }
    $firstname = trim($_POST['Firstname']);
    $firstname = strip_tags($firstname);
    $firstname = htmlspecialchars($firstname);
        if (!preg_match("/^[a-zA-Z]+$/",$_POST["Firstname"])) {
            echo"The firstname is not valid, it must only contain alphanumeric characters.";
    exit();
        }
    $email = trim($_POST['Email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
        if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
            echo"The email address is not valid.";
    exit();
        }
    $comments = trim($_POST['Comments']);
    $comments = strip_tags($comments);
    $comments = htmlspecialchars($comments);
        if (!preg_match("/^[a-zA-Z0-9 .,_\/-]+$/", $_POST["Comments"])) {
            echo '<p class="error">Comments can only contain alphanumeric characters, periods, commas, dashes and slashes</p>';
        exit();
    }

    // on écrit la requête sql
    $sql = 'INSERT INTO contactformulaire(Name, Firstname, Email, Comments) VALUES(' 
        . $bdd->quote($_POST['Name']) . ','
        . $bdd->quote($_POST['Firstname']) . ','
        . $bdd->quote($_POST['Email']) . ','
        . $bdd->quote($_POST['Comments']) . ')';

    // on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
    } catch (Exception $e) {
        echo '<p class="erreur">', $e->getMessage(), '</p>';
    }
    
    // on affiche le résultat pour le visiteur
    echo '<span class="the class that is doing well">Your message has been sent !</span>';

 header("Location: index.php");
exit;   
    }

?>