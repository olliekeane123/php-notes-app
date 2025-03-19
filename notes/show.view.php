<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main id="note-main">
    <h1><?= $heading ?></h1>

    <a href="/notes-app/notes">Return</a>
    <p><?= htmlspecialchars($note['body']) ?></p>

</main>

<?php require('views/partials/footer.php') ?>