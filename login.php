<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Login</h2>
            <?php if(isset($fsmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div> <?php } ?>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="text" name="usersurname" class="form-control" placeholder="Usersurname" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <a class="btn btn-lg btn-primary btn-block" href="index.php">Registration</a>

        </form>
    </div>
</body>
</html>

<?php
require('connect.php');
session_start();
    if (isset($_POST['email']) and isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $usersurname = htmlspecialchars($_POST['usersurname']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);

        if($count == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $smsg = "Registered";
        }else {
            $fsmsg = 'Error';
        }

    }
    
    if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        header("Location: page.php");
        exit;
    }
?>

<?php $conn->close(); ?>
