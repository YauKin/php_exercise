<?php
    if(!isset($_COOKIE['numVisit'])){
        $numVisit = 1;
    }else{
        $numVisit++;
        setcookie('numVisit', $numVisit, time()+3600*24*365);
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
    <?php
        if($numVisit > 1){
            echo "Welcome back. It's the $numVisit times you come here";
        }else{
            echo "Welcome for visiting us the first time~";
        }
    ?>
</body>
</html>