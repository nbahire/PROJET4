<?php

namespace Nbahire\Controllers;

use Nbahire\Models\UsersModel;

class UsersController extends Controller
{

    public function login()
    {
        // On vérifie si notre post contient les champs email et password
        
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // On nettoie l'e-mail et on chiffre le mot de passe
            $userModel = new UsersModel;
            $userArray = $userModel->findByEmail(strip_tags($_POST['email']));           
            if (!$userArray) {
                http_response_code(404);
                $_SESSION['erreur'] = "Votre mot de passe est incorecte!!";
                header('Location: login');
                exit;
            }
            $user = $userModel->hydrate($userArray);
            
            if (password_verify($_POST['password'], $user->getPassword())) {
                $user->setSession(); 
                
            }
            $this->render('users/login', compact('user'));
            if (isset($_SESSION['user']['roles']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])){
                header('Location: /PROJET4/public/admin'); 
            }
        }
        $this->render('users/login');
    }
    /**
     * Déconnexion de l'utilisateur
     * @return exit 
     */
    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
