<div class="entry-div-page flex flex-column flex-lg-row justify-content-around align-content-start align-lg-items-center">
    <h2>Nouveau chapitre</h2>
</div>
<form class="comment-form" method="post" action="<?php $addChapiter ?>">
    <div class=" form-group">
        <label for="titre">Titre du chapitre</label>
        <input type="text" name="titre" rows="1" class="text-dark" required />

    </div>
    <div class=" form-group">
        <label for="description">Description du chapitre</label>
        <textarea type="text" name="description" class="text-dark" required /></textarea>
    </div>
    <div class=" form-group">
        <label for="contenu">Contenu du chapitre</label>
        <textarea id="mytextarea" name="contenu" required>Hello, World!</textarea>
    </div>
    <div class="text-left flex flex-column flex-lg-row justify-content-end align-content-start align-lg-items-center">
        <input type="submit" value="Publier" class="btn btn-primary " />
    </div>

</form>