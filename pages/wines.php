<?php foreach ($wines as $wine): ?>

    <div>
        <span><?= $wine["name"] ?> - <?= $wine["year"] ?></span>
    </div>

<?php endforeach; ?>