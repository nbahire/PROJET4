<h1>Modifier le chapitre</h1>
<form class="comment-form" method="post" action="<?php $postModif ?>">
    <div class=" form-group">
        <label for="titre">Titre du chapitre</label>
        <input type="text" name="titre" value="<?= $post->titre ?>" class="text-dark" required />
    </div>
    <div class=" form-group">
        <label for="description">Description du chapitre</label>
        <textarea type="text" name="description" class="text-dark" required /><?= $post->description ?></textarea>
    </div>
    <div class=" form-group">
        <label for="contenu">Contenu du chapitre</label>
        <textarea id="mytextarea" name="contenu" required><?= $post->contenu ?></textarea>
    </div>

    <div class=" form-group">
        <div class="text-left flex flex-column flex-lg-row justify-content-end  align-content-end align-lg-items-center">
            <input type="submit" value="Modifier" class="btn btn-primary" />
        </div>
    </div>

</form>