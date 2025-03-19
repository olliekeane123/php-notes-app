<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main id="notes-main">
    <h1><?= $heading ?></h1>

    <ul>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/notes-app/note?id=<?= htmlspecialchars($note['id']) ?>">
                    <?= htmlspecialchars($note["body"]) ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>

    <p>
        <a href="/notes-app/notes/create">Create Note</a>
    </p>
</main>

<?php require('views/partials/footer.php') ?>