<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = [])
    {
        extract($data); // Extrait les clés du tableau $data en tant que variables
        require ROOT . '/views/' . $view . '.php';
    }
}

// Enregistrez ce code dans le fichier core/Controller.php.
// 6. Configuration de la Base de Données (config/database.php)
// Ce fichier contient les informations de connexion à votre base de données.

return [
    'host' => 'localhost',
    'dbname' => 'mon_blog',
    'user' => 'root',
    'password' => '',
];
