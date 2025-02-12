<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;

$jwtSecret = "9nyAutDou2SeePbyI6b42a59/sJFc9Oi+GfFpIHwRww="; // Remplace par la vraie clé utilisée dans .env.local
$payload = [
    'user_id' => 2269,
    'exp' => time() + 3600, // Expiration dans 1 heure
];

// Générer le token JWT
$token = JWT::encode($payload, $jwtSecret, 'HS256');

// Afficher le token généré
echo "Token JWT généré : " . $token . "\n";
