<?php include "includes/reg.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/SeatStockLogoFavicon3232.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock Sign Up</title>
</head>

<body>
    <?php include "includes/navbar.php"; ?>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 30rem;">
        <div class="container p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 28rem;">
            <h3 class="text-white">LET'S CREATE YOUR ACCOUNT</h3>
        </div>
        <div class="container p-3 bg-redish-gradient rounded-lg" style="max-width: 28rem;">
            <form class="form" action="" method="post">
                <div class="form-group">
                    <h5 class="text-white">First Name</h5>
                    <input type="text" class="form-control" name="user_fname" placeholder="Amal, Kamal, Namal, etc.." id="fname" required="">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Last Name</h5>
                    <input type="text" class="form-control" name="user_lname" placeholder="Wickrama , Abey, Perera, etc.." id="lname" required="">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Username</h5>
                    <input type="text" class="form-control" name="user_name" placeholder="mahoganybeer007" id="genout" required="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" onclick="usernamegen(3)">Generate
                    </button>
                </div>
                <div class="form-group">
                    <h5 class="text-white">Password</h5>
                    <input type="password" id="pswd" class="form-control" name="user_password" placeholder="Don't you dare use 123456789  ;((" required="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" onclick="shwpswd()">Show Password
                    </button>
                </div>
                <!--<div class="form-group">
                    <h5 class="text-white">Confirm Password</h5>
                    <input type="password" class="form-control" name="." placeholder="" required="">
                </div>-->
                <div><h5 class="text-white">Gender</h5></div>
                <div class="form-group form-check form-check-radio">
                    <input class="form-check-input" type="radio" name="user_gender" value="M" checked>
                    <label class="form-check-label text-white">                 <h6>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                    </label>
                    <input class="form-check-input" type="radio" name="user_gender" value="F">
                    <label class="form-check-label text-white">
                        <h6>Female</h6>
                    </label>
                </div>
                <div class="form-group">
                    <h5 class="text-white">Email</h5>
                    <input type="email" class="form-control" name="user_email" placeholder="name@provider.domain" required="">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Phone Number</h5>
                    <input type="text" class="form-control" name="user_tp" placeholder="+94 XX XXX XXXX" required="">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Account Type (Buyer or Vender)</h5>
                    <select name="user_role" class="btn btn-primary btn-lg bg-blue-gradient text-white" style="width:100%;" required="">
                        <option value="C" selected="selected">I want to buy tickets</option>
                        <option value="H">I want to sell tickets</option>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" name="submit" type="submit" value="Sign Up">Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
