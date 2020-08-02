    <?php if (!$post) {
        header('Location: erreur');
        exit;
    }
    ?>
    <div class="outer-container">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-header flex justify-content-center align-items-center" style="background-image: url('/PROJET4/public/images/blog-bg.jpg')">
                        <h1>The Story</h1>
                    </div><!-- .page-header -->
                </div><!-- .col -->
            </div><!-- .row -->

        </div><!-- .hero-section -->

        <div class="container single-page blog-page">
            <div class="row">
                <div class="col-12">
                    <div class="content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <?= $post->created_at ?>
                            </div><!-- .posted-date -->

                            <h2 class="entry-title"><?= $post->titre ?></h2>

                        </header><!-- .entry-header -->

                        <figure class="featured-image">
                            <img src="/PROJET4/public/images/blog-image.jpg" alt="">
                        </figure><!-- .featured-image -->

                        <div class="entry-content">
                            <p><?= $post->description ?></p>
                        </div><!-- .entry-content -->



                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                            <ul class="post-share flex align-items-center order-3 order-lg-1">
                                <label>Share</label>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- .post-share -->

                            <div class="comments-count order-1 order-lg-3">
                                <a href="#">2 Comments</a>
                            </div><!-- .comments-count -->
                        </footer><!-- .entry-footer -->
                    </div><!-- .content-wrap -->
                    <div class="comments-form">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Laisser un commentaire</h3>
                            <form class="comment-form" method="post" action="<?php $addComment ?>">
                                <input type="text" placeholder="Nom" name="author" required>
                                <textarea rows="18" cols="6" placeholder="Commentaire" name="comment" required></textarea>
                                <input type="submit" value="Envoyer">
                            </form><!-- .comment-form -->

                        </div><!-- .comment-respond -->
                    </div><!-- .comments-form -->

                    <div class="content-area">
                        <div class="post-comments">
                            <h3 class="comments-title">Commentaires</h3>

                            <ol class="comment-list">
                                <?php foreach ($comments as $comment) : ?>

                                    <li class="comment">
                                        <div class="comment-body flex justify-content-between">
                                            <figure class="comment-author-avatar">
                                                <img src="/PROJET4/public/images/user-1.jpg" alt="user">
                                            </figure><!-- .comment-author-avatar -->

                                            <div class="comment-wrap">
                                                <div class="comment-author flex flex-wrap align-items-center">
                                                    <span class="fn">
                                                        <a href="#"><?= $comment->author ?></a>
                                                    </span><!-- .fn -->

                                                    <span class="comment-meta">
                                                        <a href="#"><?= $comment->comment_date ?></a>
                                                    </span><!-- .comment-meta -->

                                                </div><!-- .comment-author -->

                                                <p><?= $comment->comment ?></p>
                                                <input class=" btn-signal btn-danger" type="submit" data-id="<?= $comment->id ?>" value="signaler">

                                            </div><!-- .comment-wrap -->
                                        </div><!-- .comment-body -->
                                    </li><!-- .comment -->
                                <?php endforeach; ?>

                            </ol><!-- .comment-list -->
                        </div><!-- .post-comments -->

                    </div><!-- .content-area -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .outer-container -->