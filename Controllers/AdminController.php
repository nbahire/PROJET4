<?php

namespace Nbahire\Controllers;

use Nbahire\Models\PostsModel;

class AdminController extends Controller
{
    public function index()
    {
       //On verifie si on est admin
       if($this->isAdmin()){
           $this->render('admin/index',[],'admin');

       }
    }
    /**
     * On verfie si on est admin
     *
     * @return true
     */
    private function isAdmin()
    {
        //On verifie si on est connecté et si "ROLE_ADMIN" est dans nos roles
        if (isset($_SESSION['user']) && in_array('ROLE_ADMIN',$_SESSION['user']['roles'])) {
            
            return true;
        }else{

            // On est pas admin
            $_SESSION['erreur']= "vous n'avez pas accès a cette zone";
            header('location: /PROJET4/public/main');
            exit;
        }
    }
    public function addChapiter()
    {
        $postModel = new PostsModel;
        if (!empty($_POST['titre']) && !empty($_POST['description'])) {

            $addChapiter = $postModel->setTitre($_POST['titre'])
                                    ->setDescription($_POST['description']);
            $postModel->create($addChapiter);
            //On envoie a la vue 
            $this->render('admin/addChapiter', compact('addChapiter'));
            header('location: /PROJET4/public/admin');
        }
        $this->render('admin/addChapiter',[],'admin');
    }
    /**
     * Affiche les commentaires signalés
     *
     * @param [type] $id
     * @return void
     */
    public function moderate()
    {
        
   
    }
}