<h1>Nouveau chapitre</h1>
<form method="post" action="<?php $addChapiter ?>">
    <div class=" form-group">
    <label for="exampleFormControlTextarea1">Titre du chapitre</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="titre" rows="1" required></textarea>
    </div>
    <textarea id="mytextarea" name="description" required>Hello, World!</textarea>
    <div class="text-left">
        <input type="submit" value="Publier" class="btn btn-primary" />
    </div>

</form>