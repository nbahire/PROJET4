<article>
    <h1>><?= $post->titre ?></h1>
    <div><?= $post->created_at ?></div>
    <div><?= $post->description ?></div>
    <a href="#"><button type="button" class="btn btn-link">Commenter</button></a>

    <h4 class="intro">Ajoutez un commentaire :</h4>

    <form method="post" action="<?php $addComment ?>">

        <label>Nom / Pseudo : </label></br>
        <input type="text" name="author" size="30" max="256" required>
        <br />
        <label>Commentaire : </label></br>
        <textarea name="comment" cols="51" rows="5" required></textarea>
        <br />
        <input type="submit" value="Envoyez votre message" />

    </form>

</article>
<?php foreach ($comments as $comment) : ?>
    <article>
        <h4>posté par <?= $comment->author ?></h4>
        <div>le <?= $comment->comment_date ?></div>
        <div><?= $comment->comment ?></div>
        <button class="btn btn-signal btn-primary" type="submit" data-id="<?= $comment->id ?>">signaler</button>

    </article>
<?php endforeach; ?>