<?php

namespace Nbahire\Controllers;

use Nbahire\Models\UsersModel;

class UsersController extends Controller
{
    public function index()
    {
        # code...
    }

    public function register()
    {
        // On vérifie si notre post contient les champs email et password
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // On nettoie l'e-mail et on chiffre le mot de passe
            $email = strip_tags($_POST['email']);
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);
            $userModel = new UsersModel;
            $addUser = $userModel->setEmail($email)
                ->setPassword($pass);
            $userModel->create($addUser);
            $this->render('users/register', compact('addUser'));
            header('location: ');

        }
        $this->render('users/register');
 
    }
}
