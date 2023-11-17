<?php

echo "File upload in PHP <br>";

$error_message = '';

if (isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $destination_path = "uploads/$file_name";
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));
        // echo "$file_name, $file_size, $file_extension, $destination_path";

        move_uploaded_file($file_tmp_name, $destination_path);
        $error_message = "<p style='color: green'> File upload successfully</p>";
    } else {
        $error_message = '<p style="color: red">No file selected, please try again</p>';
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
    <h1>File upload in PHP:</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        Choose your image to upload<br>
        <input type="file" name='upload'><br>
        <input type="submit" value='submit' name="submit">
    </form>
    <?php
    echo  $error_message ?? ''
    ?>
</body>

</html>