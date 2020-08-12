<form class="comment-form form-reg" method="post" action="<?php $addUser ?>">
    <h3>Formulaire d'inscription </h3>
    <label for="exampleInputName1">Nom</label>
    <input type="text" placeholder="Nom" name="author" required>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre e-mail">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-primary pull-right">S'inscrire</button>
</form>