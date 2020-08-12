<table class="table table-striped">
    <h3>Liste des commentaires signalés</h3>
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
                <td><?= utf8_encode($moderate->author) ?></td>
                <td><?= utf8_encode($moderate->comment) ?></td>
                <td></td>
                <td><a href="/PROJET4/public/admin/deleteComment/<?= $moderate->id ?>" class="btn btnSupp btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>