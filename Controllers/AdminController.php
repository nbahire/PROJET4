<?php

namespace Nbahire\Controllers;

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
        $this->render('admin/addChapiter',[],'admin');
    }
}