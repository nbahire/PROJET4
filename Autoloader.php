<?php

namespace Nbahire;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        //On récupère dans $class la totalité du namespace de la class concernée
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';

        // On verifie si le fichier existe
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
}
