                        <div class="container single-page">
                            <h2>Bienvenue dans l'administration</h2>
                            <div class="row">
                                <div class=" col-12 col-lg-12">
                                    <div class="content-wrap">
                                        <header class="entry-header">
                                            <div class="posted-date">
                                                <?= utf8_encode(end($posts)->created_at) ?>
                                            </div><!-- .posted-date -->

                                            <h2 class="entry-title"><?= utf8_encode(end($posts)->titre) ?></h2>

                                        </header><!-- .entry-header -->


                                        <div class="entry-content">
                                            <p><?= substr(utf8_encode(str_replace(chr(146), "'", end($posts)->description)), 0, 400) . '...' ?> </p>
                                        </div><!-- .entry-content -->

                                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">

                                            <a class="read-more order-2" href="posts/lire/<?= end($posts)->id ?>">Modifier</a>
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .content-wrap -->

                                    <a class="btn btn-primary btn-lg js-scroll-trigger" href="admin/addChapiter"><i class="fa fa-arrow-right"></i>Ecrir un nouveau chapitre</a>
                                    <a class="btn btn-primary btn-lg js-scroll-trigger" href="admin/moderateComment">Moderer les commentaires</a>

                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div><!-- .container -->

                        <div class=" col-12 col-lg-12">

                        </div>