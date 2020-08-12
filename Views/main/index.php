    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <a class="navbar-brand" href="/PROJET4/public/main">Billet simple pour l'alaska</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/PROJET4/public/posts">Liste des chapitres</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) : ?>
                    <?php if (isset($_SESSION['user']['roles']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/PROJET4/public/admin">Admin</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/PROJET4/public/users/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/PROJET4/public/users/logout">Déconnexion</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/PROJET4/public/users/login">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/PROJET4/public/users/register">s'inscrire</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Billet simple pour l'alaska</div>
            <div class="masthead-subheading">par Jean Forteroche</div>
            <p>Découvrez sur ce site la magnifique histoire d'un jeune homme à la découverte des plaines enneigé de
                l'Alaska. Aventures, humanisme et grandes emotions sont au rendez-vous !!</p>
            <a class="btn btn-primary btn-lg text-uppercase js-scroll-trigger" href="/PROJET4/public/posts">Lire les chapitres</a>
        </div>
    </header>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">A propos de l'auteur</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                        <h4>Jean Forteroche</h4>
                        <p class="text-muted">Ecrivain</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <p class="large text-muted">Romancier français né en 1974 à Nice, Jean Forteroche est l'auteur le
                        plus vendu en France. Écrivain prolifique, il
                        sort chaque année un nouveau roman qui atteint directement le top des ventes. Traduit en 40
                        langues, il est également
                        l'un des auteurs français les plus lus à l'étranger.
                        Jonglant avec les genres, Jean Forteroche est un auteur qui se distingue pour son sens du suspense et son style très
                        cinématographique. Si ses romans se rapprochent du thriller, ils font également la part belle à l'amour et
                        à l'aventure</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dérnier chapitre: </h2>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <h4 class="my-3"> <?= utf8_encode(end($posts)->titre) ?></h4>
                    <p class="text-muted"><?= substr(utf8_encode(str_replace(chr(146), "'", end($posts)->description)), 0, 300) . '...' ?></p>
                    <a class="btn btn-primary btn-sm text-uppercase js-scroll-trigger" href="posts/lire/<?= end($posts)->id ?>">Lire la
                        suite</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Jean Forteroche 2020</div>
            </div>
        </div>
    </footer>