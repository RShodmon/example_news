<?php require_once('/layout/head.php') ?>
<body>
<?php require_once('/main/menu.php'); ?>
    <div class="main_block">
        <form action="" class="form-signin" method="POST">
                <input type="text" name="title" class="form-control my-2" placeholder="Title" required>
                <textarea rows="7" name="description" class="form-control my-2" placeholder="Comment" required></textarea>
                <button class="btn btn-lg btn-primary btn-block my-2" type="submit">Save</button>
        </form>
    </div>
    <?php require('/controllers/postController.php'); ?>
</body>
</html>

