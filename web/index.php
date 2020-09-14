<?php

// Définition des chemins de l'application
define("CONTROLLER_PATH", "../controller/");
define("VIEW_PATH", "../views/");

// Récupération du nom du contrôleur
$controller = filter_input(INPUT_GET, "c", FILTER_SANITIZE_URL);

// Inclusion du contrôleur
include CONTROLLER_PATH . $controller . ".php";