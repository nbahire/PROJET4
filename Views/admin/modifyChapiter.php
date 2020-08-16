<h1>Modifier le chapitre</h1>
<form class="comment-form" method="post" action="<?php $postModif ?>">
    <div class=" form-group">
        <label for="exampleFormControlTextarea1">Titre du chapitre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="titre" rows="1" required><?= utf8_encode($post->titre) ?></textarea>
    </div>
    <label for="exampleFormControlTextarea1">Contenu du chapitre</label>

    <textarea id="mytextarea" name="description" required><?= utf8_encode(str_replace(chr(146), "'", nl2br($post->description))) ?></textarea>
    <div class="text-left flex flex-column flex-lg-row justify-content-end  align-content-end align-lg-items-center">
        <input type="submit" value="Modifier" class="btn btn-primary" />
        <input type="submit" value="Suprimer" class="btn btn-secondary" />
   </div>

</form>