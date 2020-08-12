<?php

namespace Nbahire\Controllers;

abstract class Controller
{
    public function render(string $file, array $datas = [], string $template = 'default')
    {

        //On extrait le contunu de $données
        extract($datas);

        //On demare le buffer de sortie
        ob_start();
        // A partir de ce point toute sortie est conservée en memoire

        //On crée le chemin vers la vue 
        require_once ROOT . '/Views/' . $file . '.php';
        // Transfere le buffer dans $content
        $content = ob_get_clean();

        // Template de page 
        require_once ROOT . '/Views/' . $template . '.php';
    }
    
}
