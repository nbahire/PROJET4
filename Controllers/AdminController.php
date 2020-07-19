<?php

namespace Nbahire\Controllers;

class AdminController extends Controller
{
    public function index()
    {
       //On verifie si on est admin
       if($this->isAdmin()){

       }
    }
    public function isAdmin()
    {
        //On verifie si on est connecté et si "ROLE_ADMIN" est dans nos roles
        if (isset($_SESSION['user']) && in_array('ROLE_ADMIN',$_SESSION['user']['roles'])) {
            # code...
        }
    }
}