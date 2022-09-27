<?php header('location: news.php'); ?>
<?php session_start(); ?>
<?php require_once (__DIR__.'/layout/head.php'); ?>
<div class="w-8/12 mx-auto mt-4 shadow rounded-md p-4">
    <div class="">
        <h1>Login</h1>
        <hr class="my-2"/>
        <form>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your login</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</div>
<?php
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['usersurname'])) {
    $username = htmlspecialchars($_POST['username']);
    $usersurname = htmlspecialchars($_POST['usersurname']);
    $email = htmlspecialchars($_POST['email']);
    $word = htmlspecialchars($_POST['password']);
    $password = md5($word);

    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
    }
    if (mysqli_query($conn, $sql)) {
        $smsg = "Go in";
    }

}

if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    
}
?>
<?php require_once (__DIR__.'/layout/footer.php'); ?>
