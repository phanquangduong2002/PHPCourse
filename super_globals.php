<?php

echo "Super globals in PHP <br>";

// print_r($_SERVER);

// print_r($_GET);


// if (isset($_GET['name'])) {
//     echo $_GET['name'] . "<br>";
// }

// if (isset($_GET['age'])) {
//     echo $_GET['age'] . "<br>";
// }

// if (isset($_GET['email'])) {
//     echo $_GET['email'] . "<br>";
// }

$name = htmlspecialchars($_POST['name']) ?? '';
$age = htmlspecialchars($_POST['age']) ?? '';
$email = htmlspecialchars($_POST['email']) ?? '';

echo $name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="name">Your name:</label>
            <input type="text" name='name'>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" name="age">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>