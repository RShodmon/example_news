<?php session_start(); ?>
<?php require('connect.php'); ?>

<?php 

$email = $_POST['email'];
$password = md5($POST['password']);

$check_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

</body>
</html>





