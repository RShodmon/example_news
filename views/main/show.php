<?php
include 'controllers/mainController.php'
?>
<div>
    <?php foreach (index() as $item): ?>
        <div class="post">
            <h2 class="title"><?= $item['title'] ?></h2>
            <p class="desc"><?= $item['description'] ?></p>
            <p class="desc">Date: <?= $item['create_date'] ?></p>
            <p class="desc">Author: </p>
        </div>
    <?php endforeach ?>
</div>
