<?php

namespace Nbahire\Controllers;

use Nbahire\Models\CommentsModel;
use Nbahire\Models\PostsModel;

class AdminController extends Controller
{
    public function index()
    {
        //On verifie si on est admin
        if ($this->isAdmin()) {
            //On instancie le modele correspondant à la table 'posts'
            $postsModel = new PostsModel;

            //On va chercher tous les posts 
            $posts = $postsModel->findBy(['']);
            //On genere la vue 
            $this->render('admin/index', compact("posts"), 'admin');
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
        if (isset($_SESSION['user']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {

            return true;
        } else {

            // On est pas admin
            $_SESSION['erreur'] = "vous n'avez pas accès a cette zone";
            header('location: /PROJET4/public/posts');
            exit;
        }
    }
    public function addChapiter()
    {
        if ($this->isAdmin()) {
            $postModel = new PostsModel;
            if (!empty($_POST['titre']) && !empty($_POST['description'])) {

                $addChapiter = $postModel->setTitre(htmlentities($_POST['titre']))
                    ->setDescription($_POST['description']);
                $postModel->create($addChapiter);
                //On envoie a la vue 
                $this->render('admin/addChapiter', compact('addChapiter'));
                header('location: /PROJET4/public/admin');
            }
            $this->render('admin/addChapiter', [], 'admin');
        }
    }
    public function modifyChapiter($id)
    {
        if ($this->isAdmin()) {

            //On instancie le modéle
            $postsModel = new PostsModel;
            //On va chercher 1 billet de blog
            $post = $postsModel->find($id);
            if (!empty($_POST['titre']) && !empty($_POST['description'])) {
                // On hydrate
                $postModif = $postsModel->setId($post->id)
                    ->setTitre(strip_tags($_POST['titre']))
                    ->setDescription(strip_tags($_POST['description']));
                // On enregistre
                $postModif->update();
                $this->render('admin/modifyChapiter', compact('post', 'postModif'), 'admin');
                header('Location: /PROJET4/public/posts'); 
            }
            $this->render('admin/modifyChapiter', compact('post'), 'admin');
        }
    }
    /**
     * Affiche les commentaires signalés
     *
     * @param [type] $id
     * @return void
     */
    public function moderateComment()
    {
        if ($this->isAdmin()) {
            $commentsModel = new CommentsModel;

            //On va chercher tous les posts 
            $moderates = $commentsModel->findBy(['moderates' => 1]);
            $this->render('admin/moderateComment', compact('moderates'), 'admin');
        }
    }
    /**
     * supprimer un commentaire si on est admin
     *
     * @param int $id
     * @return void
     */
    public function deleteComment($id)
    {
        if ($this->IsAdmin()) {
            $comment = new CommentsModel;
            $comment->delete($id);
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    /**
     * active le signalement du commentaire en mettant moderate a un
     *
     * @param int $id
     * @return void
     */
    public function getComment($id)
    {
        $commentsModel = new CommentsModel;
        $commentaArray = $commentsModel->find($id);
        if ($commentaArray) {
            $comment = $commentsModel->hydrate($commentaArray);
            $comment->setModerates($comment->getModerates() ?: 1);
            $comment->update();
        }
    }
    
}
