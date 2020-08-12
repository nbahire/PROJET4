    <?php if (!$post) {
        header('Location: erreur');
        exit;
    }
    ?>
    <div class="outer-container">


        <div class="container single-page blog-page">
            <div class="row">
                <div class="col-12">
                    <div class="content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <?= $post->created_at ?>
                            </div><!-- .posted-date -->

                            <h2 class="entry-title"><?= utf8_encode($post->titre) ?></h2>

                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?= utf8_encode(str_replace(chr(146), "'", nl2br($post->description))) ?></p>
                        </div><!-- .entry-content -->



                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">

                            <div class="comments-count order-1 order-lg-3">
                                <a href="#"><?= sizeof($comments) ?> Commentaires</a>
                            </div><!-- .comments-count -->
                        </footer><!-- .entry-footer -->
                    </div><!-- .content-wrap -->
                    <div class="comments-form">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Laisser un commentaire</h3>
                            <form class="comment-form" method="post" action="<?php $addComment ?>">
                                <input type="text" placeholder="Nom" name="author" required>
                                <textarea rows="8" cols="6" placeholder="Commentaire" name="comment" required></textarea>
                                <input class="btn-sub pull-right" type="submit" value="Envoyer">
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
                                                        <a href="#"><?= utf8_encode($comment->author) ?></a>
                                                    </span><!-- .fn -->

                                                    <span class="comment-meta">
                                                        <a href="#"><?= $comment->comment_date ?></a>
                                                    </span><!-- .comment-meta -->
                                                </div><!-- .comment-author -->

                                                <p><?= utf8_encode($comment->comment) ?></p>
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