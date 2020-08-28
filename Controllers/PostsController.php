<?php

namespace Nbahire\Controllers;

use Nbahire\Models\PostsModel;
use Nbahire\Models\CommentsModel;


class PostsController extends Controller
{
    /**
     * cette methode affichera une page listant toutes les posts de la base de données
     * @return void
     */
    public function index()
    {
        //On instancie le modele correspondant à la table 'posts'
        $postsModel = new PostsModel;

        //On va chercher tous les posts 
        $posts = $postsModel->findBy(['']);
        //On genere la vue 
        $this->render('posts/index', compact("posts"));
    }
    /**
     * affiche 1 billet de blog
     * @param int $id du billet de blog
     * @return void
     */

    public function lire(int $id)
    {
        //On instancie le modéle
        $postsModel = new PostsModel;
        $commentsModel = new CommentsModel;
        //On va chercher 1 billet de blog

        $post = $postsModel->find($id);
        if (!$post) {
            http_response_code(404);
            header('Location: erreur');
            exit;
        }
        //On associe le commentaire a son billet de blog correspodant
        $comments = $commentsModel->findBy(['post_id' => $id]);
        if (!empty($_POST['author']) && !empty($_POST['comment'])) {

            $addComment = $commentsModel->setPost_id($id)
                ->setAuthor(htmlentities($_POST['author']))
                ->setComment(htmlentities($_POST['comment']));
            $commentsModel->create($addComment);
            //On envoie a la vue 
            header('Location:' . $id . '');
            $this->render('posts/lire', compact('post', "comments", 'addComment'));
        }
        $this->render('posts/lire', compact('post', "comments"));
    }
}
