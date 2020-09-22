<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php include "./component/header.html" ?>
    <div class="indexContent">
        <div class="container-sm">
            <div class="row">
                <div class="cardBox col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="https://images.outlookindia.com/public/uploads/articles/2019/10/27/Robert-Lewandowski-Bayern-A_570_850.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="cardBox col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tony</h4>
                            <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                        <img class="card-img-bottom" src="https://www.w3schools.com/bootstrap4/img_avatar6.png" alt="Card image" style="width:100%">
                    </div>
                </div>
                <div class="cardBox col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="insert_Form">
        <div class="container-sm">
            <form action="./insert.php" method="POST">
                <div class="col">
                    <h1>Input Form for push data to Firebase</h1>
                    <div class="row">
                        <input type="text" class="form-control" id="name" placeholder="Enter lassname" name="lname">
                    </div>
                    <br>
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Enter firstname" name="fname">
                    </div><br>
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                    </div><br>
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Enter address" name="address">
                    </div><br>
                    <div class="row">
                        <input type="text" class="form-control" pattern="[0-9]{8}" placeholder="Telephone format: 12345678" name="telephone">
                    </div><br>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
    <?php include "./component/footer.html" ?>
</body>

</html>