<?php require_once('/layout/head.php') ?>
<body>
    <div class="container">
        <form action="../../controllers/authController.php" class="form-signin" method="POST">
            <h2 id="reg">Registration</h2>
            <?php if(isset($smsg)){?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div> <?php } ?>
            <?php if(isset($fsmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div> <?php } ?>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="text" name="usersurname" class="form-control" placeholder="Usersurname" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block my-2" type="submit">Register</button>
            <a class="btn btn-lg btn-primary btn-block my-2" href="login.php">Login</a>
        </form>
    </div>
</body>
</html>

<?php $conn->close(); ?>
