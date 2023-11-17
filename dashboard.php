<?php
session_start();

if (isset($_SESSION['email'])) {
    echo "Welcome " . $_SESSION['email'] . " to Dashboard page <br>";
    echo "<a href='/logout.php'>Logout</a>";
} else {
    echo "Welcome guest to Dashboard page <br>";
    echo "<a href='/sessions.php'>Back to Login page</a>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>This is dashboard</h1>
</body>

</html>