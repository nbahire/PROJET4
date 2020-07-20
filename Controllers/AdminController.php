<?php

namespace Nbahire\Controllers;

class AdminController extends Controller
{
    public function index()
    {
       //On verifie si on est admin
       var_dump($_SESSION);
       if($this->isAdmin()){

       }
    }
    private function isAdmin()
    {
        //On verifie si on est connecté et si "ROLE_ADMIN" est dans nos roles
        if (isset($_SESSION['user']) && in_array('ROLE_ADMIN',$_SESSION['user']['roles'])) {
            // On est admin
            return true;
        }else{

            // On est pas admin
            $_SESSION['erreur']= "vous n'avez pas accès a cette zone";
            header('location: /');
            exit;
        }
    }
}