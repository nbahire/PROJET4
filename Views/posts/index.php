<h1>liste des chapitres</h1>

<?php foreach ($posts as $post) : ?>
    <article>
        <h3><?= $post->titre ?></h3>
        <div><?= $post->description ?></div>
        <div class="text-left">
            <a href="posts/lire/<?= $post->id ?>" class="btn btn-primary">lire la suite</a>
        </div>
    </article>
<?php endforeach; ?>