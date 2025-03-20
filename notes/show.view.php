<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>

<main id="note-main">
    <h1><?= $heading ?></h1>

    <a href="/notes-app/notes">Return</a>
    <p><?= htmlspecialchars($note['body']) ?></p>

</main>

<?php view('partials/footer.php') ?>