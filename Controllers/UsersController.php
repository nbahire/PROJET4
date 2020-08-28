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

                $_SESSION['erreur'] = " Identifiants incorectes !! ";
                header('Location: login');
                exit;
            }
            $user = $userModel->hydrate($userArray);

            if (password_verify($_POST['password'], $user->getPassword())) {
                $user->setSession();
                if (isset($_SESSION['user']['roles']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {
                    header('Location: /admin');
                }
            } else {
                $_SESSION['erreur'] = " Identifiants incorectes !! ";
                header('Location: login');
                exit;
            }
            $this->render('users/login', compact('user'));
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
        header('Location: /main');
        exit;
    }
}
