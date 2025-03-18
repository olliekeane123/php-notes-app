<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main id="note-main">
    <h1><?= $heading ?></h1>

    <a href="/notes-app/notes">Return</a>
    <p><?= $note['body'] ?></p>

</main>

<?php require('partials/footer.php') ?>