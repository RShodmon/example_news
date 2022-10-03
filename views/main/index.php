<?php
include 'controllers/mainController.php'
?>
<div>
    <?php foreach (index() as $item): ?>
        <div class="post">
            <h2 class="title"><?= $item['title'] ?></h2>
            <p class="desc">Date: <?= $item['create_date'] ?></p>
            <p class="desc">Author: <?= $item['fio'] ?></p>
            <a href="">More</a>
        </div>
    <?php endforeach ?>
</div>
