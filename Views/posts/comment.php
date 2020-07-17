<?php foreach ($comments as $comment) : ?>
    <h4><?= $comment->author ?></h4>
    <div><?= $comment->comment_date ?></div>
    <div><?= $comment->comment ?></div>

<?php endforeach; ?>