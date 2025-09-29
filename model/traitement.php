<?php

require_once "../inc/init.inc.php";


if (!empty($_POST) && isset($_POST['form_submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $question = $_POST['question'];

    if (!$nom || !$prenom || !$email || !$objet || !$question) {
        header('Location: ../vue/contact.php?error=true');
        exit;
    }

    // debug($_POST);

    try {
        executeRequete("INSERT INTO question (nom,prenom,email,objet,description) VALUES (:nom,:prenom,:email,:objet,:descr)", [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ":email" => $email,
            ':objet' => $objet,
            ":descr" => $question
        ]);

        header('Location: ../vue/contact.php?success=true');
        exit;

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

if(isset($_GET)){
    $produit = $_GET['produit'];
    if($produit === 'jouets'){
        header('Location: ../vue/produit.php?produit=jouets');
        exit;
    } elseif($produit === 'accessoires'){
        header('Location: ../vue/produit.php?produit=accessoires');
        exit;
    } elseif($produit === 'nourritures'){
        header('Location: ../vue/produit.php?produit=nourritures');
        exit;
    }
}
?>