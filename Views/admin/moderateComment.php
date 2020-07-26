<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Auteur</th>
        <th>Commentaire</th>
        <th>signalements</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($moderates as $moderate) : ?>
            <tr>
                <td><?= $moderate->id ?></td>
                <td><?= $moderate->author ?></td>
                <td><?= $moderate->comment ?></td>
                <td></td>
                <td><a href="" class="btn btn-warning">Restaurer</a><a href="/PROJET4/public/admin/deleteComment/<?= $moderate->id ?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>