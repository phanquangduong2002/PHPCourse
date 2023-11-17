<?php

echo "Sessions trong PHP <br>";

/*
   Session are stored in the server
   It can be used across multiple pages
 */
session_start();
if (isset($_POST['submit'])) {
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($email == 'phanquangduong2002@gmail.com' && $password == '12345') {
    // redirect to another page
    $_SESSION['email'] = $email;

    header("Location: dashboard.php");
  } else {
    echo "Incorrect email/password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Login to your account: </h1>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
      <label for="email">Your email:</label><br>
      <input type="text" name='email'>
    </div>
    <div>
      <label for="password">Password:</label><br>
      <input type="password" name="password">
    </div>

    <input type="submit" value="submit" name="submit">
  </form>
</body>

</html>