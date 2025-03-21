<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>

<main>
    <h1><?= $heading ?></h1>

    <form method="POST">
        <label for="body">Note</label>
        <div>
            <textarea name="body" id="body">
                <?= $_POST['body'] ?? ''; ?>
            </textarea>

            <?php if (isset($errors['body'])) : ?>
                <p><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>
        <p>
            <button type="submit">Create</button>
        </p>
    </form>
</main>

<?php view('partials/footer.php') ?>