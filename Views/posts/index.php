<div class="outer-container">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-16">
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

    <?php foreach (array_reverse($posts) as $post) : ?>
        <div class="container single-page">
            <div class="row">
                <div class=" col-12 col-lg-12">
                    <div class="content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <?= $post->created_at ?>
                            </div><!-- .posted-date -->

                            <h2 class="entry-title"><?= utf8_encode($post->titre) ?></h2>

                        </header><!-- .entry-header -->


                        <div class="entry-content">
                            <p><?= substr(utf8_encode(str_replace(chr(146), "'", $post->description)), 0, 400) . '...' ?> </p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">

                            <a class="read-more order-2" href="posts/lire/<?= $post->id ?>">lire la suite</a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .content-wrap -->


                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .container -->
    <?php endforeach; ?>

</div><!-- .outer-container -->