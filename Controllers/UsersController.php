<?php

namespace Nbahire\Controllers;

use Nbahire\Models\UsersModel;

class UsersController extends Controller
{
    public function login()
    {
            
            $UsersModel = new UsersModel;
            //On va chercher 1 billet de blog

            if (!empty($_POST['email']) && !empty($_POST['password'])) {

                $user = $UsersModel->getId()
                    ->setAuthor($_POST['author'])
                    ->setComment($_POST['comment']);
                $commentsModel->create($addComment);
                //On envoie a la vue 
                header('Location:' . $id . '');
                $this->render('posts/lire', compact('post', "comments", 'addComment'));
            }
    }
}
