<?php 
include "create.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/SeatStockLogoFavicon3232.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock</title>
</head>

<body>
    <?php include "../includes/navbar.php"; ?>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 30rem;">
        <div class="container p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 28rem;">
            <h3 class="text-white">LET'S PLAN YOUR SEATING</h3>
        </div>

        <div class="container p-3 bg-redish-gradient rounded-lg" style="max-width: 28rem;">
            <form class="form" meaction="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <h5 class="text-white">Hi <?php echo $_SESSION['username']; ?>! give your thing a name</h5>
                    <input type="text" class="form-control" name="e_title" placeholder="Green Fiesta, NSBM-KANDY Bus, ...">
                </div>

                <div class="form-group">
                    <h5 class="text-white">When???</h5>
                    <input type="date" class="form-control " name="e_date">
                </div>

                <div class="form-group form-check form-check-radio">
                    <h5 class="text-white">On wheels or a venue?</h5>
                    <input class="form-check-input" type="radio" name="e_type" value="E" checked>
                    <label class="form-check-label text-white">EVENT</label><br>
                    <input class="form-check-input " type="radio" name="e_type" value="T">
                    <label class="form-check-label text-white">TRANSPORT</label>
                </div>

                <div class="form-group">
                    <h5 class="text-white">How many seats?</h5>
                    <input type="text" class="form-control" name="e_no_seat" placeholder="42, 300, ...">
                </div>

                <div class="form-group">
                    <h5 class="text-white">Ticket price (in LKR)</h5>
                    <input type="text" class="form-control" name="e_tprice" placeholder="Rs: 500.00, Rs: 2000.00, ...">
                </div>

                <div class="form-group">
                    <h5 class="text-white">Choose an image</h5>
                    <input type="file" class="btn btn-primary custom-file-input" id="customFile" name="image">
                </div>


                <div class="form-group">
                    <h5 class="text-white">Event description</h5>
                    <textarea type="text" class="form-control " name="e_disc"></textarea>
                </div>

                <div>
                    <span class="mt-5"><?php show();?></span>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;">Get Started</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
