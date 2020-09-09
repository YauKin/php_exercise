<!DOCTYPE html>
<html lang="en">
<?php
    // $username = strtoupper($_GET['uname']);
    // $email = $_GET['email'];
    extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        WelCome,
        <?php
            echo "Name: " . $username .", Email: ". $email;
        ?>
    </h1>
</body>
</html>