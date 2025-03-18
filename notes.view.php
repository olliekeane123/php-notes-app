<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main id="notes-main">
    <h1><?= $heading ?></h1>

    <ul>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/notes-app/note?id=<?= $note['id'] ?>"> <?= $note["body"] ?> </a>
            </li>
        <?php endforeach; ?>

    </ul>
</main>

<?php require('partials/footer.php') ?>