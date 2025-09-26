<?php

function debug($param){
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

function executeRequete(string $requete, array $param = []) {


    global $pdo;

    $resultat = $pdo->prepare($requete);

    $resultat->execute($param); 

    return $resultat; 
    
}