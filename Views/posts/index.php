<div class="outer-container">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="site-branding flex flex-column align-items-center">
                    <h1 class="site-title"><a rel="home">liste des chapitres</a></h1>
                </div><!-- .site-branding -->

                <nav class="site-navigation">


                    <div class="header-bar-social d-md-none">
                        <ul class="flex justify-content-center align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .header-bar-social -->

                </nav><!-- .site-navigation -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
    <?php foreach ($posts as $post) : ?>
        <div class="container single-page">
            <div class="row">
                <div class="col-16 col-lg-16">
                    <div class="content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <?= $post->created_at ?>
                            </div><!-- .posted-date -->

                            <h2 class="entry-title"><?= $post->titre ?></h2>

                        </header><!-- .entry-header -->

                        <figure class="featured-image">
                            <img src="images/1.jpg" alt="">
                        </figure><!-- .featured-image -->

                        <div class="entry-content">
                            <p><?= $post->description ?> </p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                            <ul class="post-share flex align-items-center order-3 order-lg-1">
                                <label>Partager</label>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- .post-share -->

                            <a class="read-more order-2" href="posts/lire/<?= $post->id ?>">lire la suite</a>

                            <div class="comments-count order-1 order-lg-3">
                                <a href="#">2 Commentaires</a>
                            </div><!-- .comments-count -->
                        </footer><!-- .entry-footer -->
                    </div><!-- .content-wrap -->


                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .container -->
    <?php endforeach; ?>

</div><!-- .outer-container -->