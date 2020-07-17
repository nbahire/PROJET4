<?php

namespace Nbahire\Controllers;

use Nbahire\Models\CommentsModel;


class CommentController extends Controller
{

    public function addComment()
    {
        $comment= new CommentsModel;

        $comment->getId // reprend l'id de l'url
                ->getAuthor // name dans le formulaire
                ->getComment; // content dans le formulaire

        // Sauvegarde du commentaire
        $this->comment->create(); // va chercher la méthode dans le Model
    }
}

