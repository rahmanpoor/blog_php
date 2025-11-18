<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/admin/dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('../assets/admin/dist/images/login-new.jpeg')
        }
    </style>
    <title>Register</title>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">Register</p>
                <div class="">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
                </div>
                 <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="first_name">First Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="first_name" name="first_name" type="text" required="" placeholder="Your First Name" aria-label="First Name">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="last_name">Last Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="last_name" name="last_name" type="text" required="" placeholder="Your Last Name" aria-label="Last Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Password" aria-label="Password">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="confirm_password">Confirm Password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="confirm_password" name="confirm_password" type="password" required="" placeholder="Confirm ..." aria-label="Confirm"> 
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Register</button>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="login.php">
                    Already have an account ?
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>