<?php
// echo "Feedback Project <br>";
include './configuration/database.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Feedback</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center m-3">
        <h1>Enter your Feedback here</h1>
        <div class="w-50">
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="What is your name?" name="name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter your email" name="email">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Enter your feedback" rows="2" name="feedback"></textarea>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Send" name="submit">
                </div>
            </form>
        </div>
    </div>
    <?php include './components/footer.php' ?>
</body>

</html>