<?php require 'layouts/header.php'; ?>
<h1>Nos Projets</h1>
<ul>
    <?php foreach ($projects as $project): ?>
        <li><strong><?= $project['title'] ?></strong>: <?= $project['description'] ?></li>
    <?php endforeach; ?>
</ul>
<?php require 'layouts/footer.php'; ?>
