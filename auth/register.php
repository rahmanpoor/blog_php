<?php
require_once "../functions/pdo_connection.php";
require_once "../functions/helpers.php";


$error = '';


//validation
if (
    isset($_POST['email']) && $_POST['email'] !== '' &&
    isset($_POST['first_name']) && $_POST['first_name'] !== '' &&
    isset($_POST['last_name']) && $_POST['last_name'] !== '' &&
    isset($_POST['password']) && $_POST['password'] !== '' &&
    isset($_POST['confirm']) && $_POST['confirm'] !== ''
) {
    //check for password
    if ($_POST['password'] === $_POST['confirm']) {
        //check password length
        if (strlen($_POST['password']) > 5) {
            global $pdo;
            $query = "SELECT * FROM users WHERE email = ?;";
            $statement = $pdo->prepare($query);
            $statement->execute([$_POST['email']]);
            $emailCheck = $statement->fetch();
            //check for email
            if ($emailCheck === false) {
                $query = "INSERT INTO users SET email = ?, first_name = ?, last_name = ?, password = ?, created_at = NOW() ;";
                $statement = $pdo->prepare($query);
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $statement->execute([$_POST['email'], $_POST['first_name'], $_POST['last_name'], $password]);
                redirect('auth/login.php');
            } else {
                $error = 'email already exists!';
            }
        } else {
            $error = 'password must be at least 6 characters!';
        }
    } else {
        $error = 'passwords do not match!';
    }
} else {
    if (!empty($_POST))
        $error = 'all fields are required!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= asset('assets/admin/dist/styles.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <style>
        .login {
            background: url('../assets/admin/dist/images/login-new.jpeg')
        }
    </style>

    <title>Register</title>
</head>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form action="<?= url('/auth/register.php') ?>" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                    <section class="bg-light my-0 px-2"><small style="color: red;"><?php if ($error !== '') echo $error; ?></small></section>
                    <p class="text-gray-800 font-medium">Register</p>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="email">Email</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" placeholder="Your Email" aria-label="Email">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="first_name">First Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="first_name" name="first_name" type="text" placeholder="Your First Name" aria-label="First Name">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="last_name">Last Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="last_name" name="last_name" type="text" placeholder="Your Last Name" aria-label="Last Name">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="password">Password</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="confirm">Confirm Password</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="confirm" name="confirm" type="password" placeholder="Confirm ..." aria-label="Confirm">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Register</button>
                    </div>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="<?= url('auth/login.php') ?>">
                        Already have an account ?
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>