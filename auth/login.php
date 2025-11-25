<?php
session_start();
require_once "../functions/pdo_connection.php";
require_once "../functions/helpers.php";

if (isset($_SESSION['user'])) {
  unset($_SESSION['user']);
}

$error = '';
if (
  isset($_POST['email']) && $_POST['email'] !== '' &&
  isset($_POST['password']) && $_POST['password'] !== ''
) {
  global $pdo;
  $query = "SELECT * FROM users WHERE email = ?;";
  $statement = $pdo->prepare($query);
  $statement->execute([$_POST['email']]);
  $user = $statement->fetch();
  if ($user !== false) {
    if (password_verify($_POST['password'], $user->password)) {
      $_SESSION['user'] = $user->email;
      redirect('admin/index.php');
    } else {
      $error = 'invalid password!';
    }
  } else {
    $error = 'invalid email!';
  }
} else {
  if (!empty($_POST))
    $error = 'all fields are required!';
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Login | Tailwind Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../assets/admin/dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
    .login {
      background: url('../assets/admin/dist/images/login-new.jpeg')
    }
  </style>
</head>

<body class="h-screen font-sans login bg-cover">
  <div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form action="<?= url('/auth/login.php') ?>" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
             <section class="bg-light my-0 px-2"><small style="color: red;"><?php if ($error !== '') echo $error; ?></small></section>
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
          <div class="">
            <label class="block text-sm text-gray-00" for="email">Email</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Your Email" aria-label="Email">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Password</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
          </div>
          <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="<?= url('/auth/register.php')
                                                                                                              ?>">
            Not registered ?
          </a>
        </form>

      </div>
    </div>
  </div>
</body>

</html>