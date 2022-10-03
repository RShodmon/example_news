<?php 

require_once('/config/dbConnect.php');


//registration database access
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

//login database access
    if (isset($_POST['email']) and isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $usersurname = htmlspecialchars($_POST['usersurname']);
        $email = htmlspecialchars($_POST['email']);
        $word = htmlspecialchars($_POST['password']);
        $password = md5($word);
        
        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'"; 
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            $row = mysqli_fetch_assoc($result);
            $row['id'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            $new_url = 'http://example/mypost.php';
            header('Location: '.$new_url);
            ob_end_flush();
            exit;
        }else {
            $fsmsg = 'Error';
        }
    }
    
    if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
    }
    if ($email != $_SESSION['email'] and $password != $_SESSION['password']) {
        $fsmsg = 'Error';
    }


?>

<?php $conn->close(); ?>
