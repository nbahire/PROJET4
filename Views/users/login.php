<form class="comment-form form-reg" method="post" action="<?php $user ?>">
    <h2>Connexion administrateur</h2>
    <div class="container">
        <?php if (!empty($_SESSION['erreur'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['erreur'];
                unset($_SESSION['erreur']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre e-mail" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" required>
    </div>
    <footer class="entry-footer flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">
        <button type="submit" class="btn btn-primary pull-right">Se connecter</button>
    </footer><!-- .entry-footer -->

</form>