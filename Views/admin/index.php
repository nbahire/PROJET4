                        <div class="container single-page">
                            <div class="entry-div-page flex flex-column flex-lg-row justify-content-around align-content-start align-lg-items-center">
                                <h2 class="section-heading text-uppercase">Bienvenue dans l'administration</h2>
                            </div>
                            <div class="entry-div flex flex-column flex-lg-row justify-content-around align-content-start align-lg-items-center">
                                <a class="btn btn-primary btn-outline-success btn-lg " href="admin/addChapiter">Ecrire un nouveau chapitre</a>
                                <a class="btn btn-secondary btn-outline-info btn-lg " href="admin/moderateComment">Moderer les commentaires</a>
                            </div>

                            <div class="row">
                                <div class=" col-12 col-lg-12">
                                    <div class="last-chap content-wrap">
                                        <h2 class="section-heading text-uppercase">Dérnier chapitre publié </h2>

                                        <header class="entry-header">
                                            <h2 class="entry-title"><?= utf8_encode(end($posts)->titre) ?></h2>
                                        </header><!-- .entry-header -->


                                        <div class="entry-content">
                                            <p><?= end($posts)->description ?> </p>
                                        </div><!-- .entry-content -->

                                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">
                                            <a class="read-more order-2" href="/admin/modifyChapiter/<?= end($posts)->id ?>">Modifier</a>
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .content-wrap -->

                                </div><!-- .col -->

                            </div><!-- .row -->

                        </div><!-- .container -->

                        <div class=" col-12 col-lg-12">

                        </div>