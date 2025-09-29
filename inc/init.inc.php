<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=lapinou&co;charset=utf8mb4',
    'root',
    'root',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    )
);

session_start();

// Je crée la constante pour les inclusion
define('BASE_URL','/lapinou&co/');


require_once __DIR__ . '/fonction.inc.php';

