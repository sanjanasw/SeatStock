<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/SeatStockLogoFavicon3232.png">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <title>SeatStock FAQ</title>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded-lg text-center">
        <div class="container p-2 mb-3 bg-blue-gradient rounded-lg">
            <h3 class="text-white">FAQ</h3>
        </div>

        <button class="btn btn-link btn-wd btn-lg bg-redish-gradient text-white nounderline" style="width:100%;" type="button" data-toggle="collapse" data-target="#Q1" aria-expanded="false" aria-controls="Q1">
            Q1
        </button>

        <div class="collapse" id="Q1">
            <div class="container card-body">
                A1
            </div>
        </div>

        <button class="btn btn-link mt-3 btn-wd btn-lg bg-redish-gradient text-white nounderline" style="width:100%;" type="button" data-toggle="collapse" data-target="#Q2" aria-expanded="false" aria-controls="Q2">
            Q2
        </button>

        <div class="collapse" id="Q2">
            <div class="container card-body">
                A2
            </div>
        </div>
    </div>
</body>
</html>