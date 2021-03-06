<table class="table table-striped">
    <div class="entry-div flex flex-column flex-lg-row justify-content-around align-content-start align-lg-items-center">
        <h2 class="section-heading text-uppercase">Liste des commentaires signalés</h2>
    </div>
    <thead>
        <th>Chapitre</th>
        <th>Auteur</th>
        <th>Commentaire</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($moderates as $moderate) : ?>
            <tr>
                <td><?= $moderate->post_id ?></td>
                <td><?= utf8_encode($moderate->author) ?></td>
                <td><?= utf8_encode($moderate->comment) ?></td>
                <td>
                    <a href="/admin/deleteComment/<?= $moderate->id ?>" class="btn btnSupp btn-danger">Supprimer</a>
                    <a type="button" type="submit" href="/admin/restaure/<?= $moderate->id ?>" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>