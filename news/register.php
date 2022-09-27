<?php require (__DIR__.'/layout/head.php'); ?>
<?php require('connect.php'); ?>
<div class="w-8/12 mx-auto mt-4 shadow rounded-md p-4">
    <div class="">
        <h1>Regis</h1>
        <hr class="my-2"/>
        <form method="POST">
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                <input type="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="mb-6">
                <label for="usersurname" class="block mb-2 text-sm font-medium text-gray-900">Your Surname</label>
                <input type="usersurname" name="usersurname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your login</label>
                <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</div>
<?php 
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usersurname']) && isset($_POST['email'])) {
    $username = htmlspecialchars($_POST['username']);
    $usersurname = htmlspecialchars($_POST['usersurname']);
    $email = htmlspecialchars($_POST['email']);
    $word = htmlspecialchars($_POST['password']);
    $password = md5($word);

    $sql = "INSERT INTO user (name, surname, email, password) VALUES ('$username', '$usersurname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo '';
    }else {
        echo '';
    }
}
?>

<?php require_once (__DIR__.'/layout/footer.php'); ?>
