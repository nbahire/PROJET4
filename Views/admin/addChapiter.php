<h1>Nouveau chapitre</h1>
<form class="comment-form" method="post" action="<?php $addChapiter ?>">
    <div class=" form-group">
        <label for="exampleFormControlTextarea1">Titre du chapitre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="titre" rows="1" required></textarea>
    </div>
    <label for="exampleFormControlTextarea1">Contenu du chapitre</label>

    <textarea id="mytextarea" name="description" required>Hello, World!</textarea>
    <div class="text-left">
        <input type="submit" value="Publier" class="btn btn-primary" />
    </div>

</form>