<?php

?>

<?php //
//
////user page post script
//if (isset($_POST['title']) && isset($_POST['description'])) {
//    $title = htmlspecialchars($_POST['title']);
//    $description = htmlspecialchars($_POST['description']);
//    $date = date('Y.m.d');
//    $user = $_SESSION['id'];
//    $sql = "INSERT INTO post (title, description, date, id_user) VALUES ('$title', '$description', '$date', '$user')";
//
//    if (mysqli_query($conn, $sql)) {
//        $smsg = "Success";
//    }else {
//        $fsmsg = "Error";
//    }
//}
//$id = $_SESSION['id'];
//$sql = "SELECT * FROM post p, user u WHERE u.id = p.id_user and id_user = $id";
//
//
//main page post script
//$id = $_SESSION['id'];
//$sql = "SELECT * FROM post p, user u WHERE u.id = p.id_user";
//
//if($result = $conn->query($sql)){
//    foreach($result as $row){
//        echo '<div class="post">';
//        echo '<h2 class="title">'.$row['title'].'</h2>';
//        echo '<p class="desc">'.$row['description'].'</p>';
//        $date = date_create($row['date']);
//        echo '<p>Date: '.date_format($date, 'Y-m-d').'</p>';
//        echo '<p>Author: '.$row['name'].'</p>';
//        echo '</div>';
//    }
//}
//
//?>