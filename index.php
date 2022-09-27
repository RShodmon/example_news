<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <?php
    require('connect.php');
    ?>

</head>
<body>
<?php 
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usersurname'])) {
        $username = htmlspecialchars($_POST['username']);
        $usersurname = htmlspecialchars($_POST['usersurname']);
        $email = htmlspecialchars($_POST['email']);
        $word = htmlspecialchars($_POST['password']);
        $password = md5($word);
        $sql = "INSERT INTO user (name, surname, email, password) VALUES ('$username', '$usersurname', '$email', '$password')";
    
        if (mysqli_query($conn, $sql)) {
            $smsg = "Registered";
        }else {
            $fsmsg = "Error";
        }
    }  
?>
    <div class="container">
        <form action="" class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div> <?php } ?>
            <?php if(isset($fsmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div> <?php } ?>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="text" name="usersurname" class="form-control" placeholder="Usersurname" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        </form>
    </div>
</body>
</html>

<?php $conn->close(); ?>
