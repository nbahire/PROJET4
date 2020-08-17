
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-16">
                <div class="site-branding flex flex-column align-items-center">
                    <h1 class="site-title"><a rel="home">Les chapitres</a></h1>
                </div><!-- .site-branding -->

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
                                <?= substr($post->created_at, 0, -8) ?>
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

