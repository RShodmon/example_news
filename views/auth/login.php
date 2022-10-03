<?php 
ob_start();
?>
<?php require_once('/layout/head.php') ?>
<body>
    <div class="container">
        <form action="../../controllers/authController.php" class="form-signin" method="POST">
            <h2 id="login">Login</h2>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block my-2" type="submit">Login</button>
            <a class="btn btn-lg btn-primary btn-block my-2" href="regis.php">Registration</a>

        </form>
    </div>
</body>
</html>
<div class='form-signin'>
    <?php if(isset($fsmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div> <?php } ?>
</div>






