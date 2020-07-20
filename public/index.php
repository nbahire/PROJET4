<?php
// On importe les namespaces nécessaires
use Nbahire\Autoloader;
use Nbahire\Core\Main;
// On définit une constante contenant le dossier racine
$_SESSION['erreur']= null;
define('ROOT', dirname(__DIR__));

// On importe l'Autoloader
require_once ROOT . '/Autoloader.php';
Autoloader::register();

// On instancie Main
$app = new Main();

// On démarre l'application
$app->start();
