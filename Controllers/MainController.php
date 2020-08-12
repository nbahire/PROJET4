<?php

namespace Nbahire\Controllers;

use Nbahire\Models\PostsModel;

class MainController extends Controller
{
    public function index()
    {
        //On instancie le modele correspondant à la table 'posts'
        $postsModel = new PostsModel;

        //On va chercher tous les posts 
        $posts = $postsModel->findBy(['']);
        //On genere la vue 
        $this->render('main/index', compact("posts"), 'home');
    }
}
