<?php 
// Définir les variables pour la connexion au serveur MySQL
define("DSN", "mysql:host=localhost;dbname=blog");
define("USER", "arthur");
define("PASS", "Root89!!");

// Connexion new PDO + OPTIONS DE GESTION D'ERREUR 
$pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// TEST CONNECTION
if ($pdo === false) {
    echo '<div class="alert-danger">Error connection : ' . $pdo->error_log() ."</div>";
} else {
    echo '<div class="text-right mr-5">Connection MySQL Server OK 😎</div>';
}