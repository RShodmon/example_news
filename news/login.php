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
<?php require_once (__DIR__.'/layout/footer.php'); ?>
