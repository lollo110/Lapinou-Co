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

if (!empty($_GET) && $_GET['produit']) {
    $produit = $_GET['produit'];
    if ($produit === 'jouets') {
        header('Location: ../vue/produit.php?produit=jouets');
        exit;
    } elseif ($produit === 'accessoires') {
        header('Location: ../vue/produit.php?produit=accessoires');
        exit;
    } elseif ($produit === 'nourritures') {
        header('Location: ../vue/produit.php?produit=nourritures');
        exit;
    }
}


if(!empty($_GET)&& $_GET['logout']){

    session_destroy();
    header('location: ../vue/deconnexion.php');
    exit; 
}







if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_inscription"])) {

    $nom = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    if (!$nom || !$prenom || !$email || !$password) {
        header("location: ../vue/inscription.php?error=true");
        exit;
    }

    $pwd_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        executeRequete("INSERT INTO client (nom,prenom,email,password) VALUES (:nom,:prenom,:email,:password)", [
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":password" => $pwd_hash
        ]);
        header("location: ../vue/inscription.php?success=true");
        exit;
    } catch (PDOException $erreur) {
        echo $erreur->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_connexion"])) {

    $identifiant = $_POST["email"];
    $password = $_POST["password"];

    $resultat = executeRequete("SELECT * FROM client WHERE email = :email", [":email" => $identifiant]);
    $user = $resultat->fetch();

    if($user){
        if(password_verify($password, $user["password"])){
            $_SESSION["membres"] = $user;
            header("location: ../vue/page_accueil.php?connexion=true");
            exit;
        }
    }
    header("location: ../vue/connexion.php?connexion=false");
}