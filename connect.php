<?php
// Informations d'identification
define('DB_SERVER', 'mysql-edris.alwaysdata.net');
define('DB_USERNAME', 'edris');
define('DB_PASSWORD', 'France33@');
define('DB_NAME', 'edris_mutillidae');

// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// V�rifier la connexion
if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
