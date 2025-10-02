<?php

require_once "../inc/init.inc.php";


if (!empty($_POST) && isset($_POST['form_contact'])) {
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


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_inscription"])){

    $nom = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}  

header("location: ../vue/inscription.php");

?>