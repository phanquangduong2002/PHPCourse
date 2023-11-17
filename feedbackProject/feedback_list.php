<?php
require './configuration/database.php';
$sql = "SELECT * FROM feedback;";
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execcute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks  = $statement->fetchAll();

        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';

            echo "$name, $email, $body <br>";
        }
    } catch (PDOException $e) {
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
</head>

<body>
    <h1>Feedback list:</h1>

    <?php include './components/footer.php' ?>
</body>

</html>