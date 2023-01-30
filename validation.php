<?php
// connexion à la base
require_once("connection.php");

if (empty($_POST['Name']) || empty($_POST['Firstname']) || empty($_POST['Email']) || empty($_POST['Comments'])) {
    echo '<p class="erreur">Attention, vous devez remplir tous les champs</p>';

    // on écrit la requête sql
    $sql = 'INSERT INTO contactformulaire(Name, Firstname, Email, Comments) VALUES(' . $bdd->quote($_POST['Name']) . ','
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
    echo '<span class="laclasse qui va bien">Votre message à bien été envoyé !</span>';
}
?>