<?php
include "includes/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock Login</title>
</head>
<body>
    <?php include "includes/navbar.php"; ?>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 30rem;">
            <div class="container shadow-lg p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 28rem;">
                    <h3 class="text-white">LOGIN</h3>
            </div>
            <div class="container shadow-lg p-3 bg-redish-gradient rounded-lg" style="max-width: 28rem;">
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <h5 class="text-white">Username</h5>
                        <input type="email" class="form-control" name="user_name" placeholder="Type your username" required="">
                    </div>
                    <div class="form-group">
                        <h5 class="text-white">Password</h5>
                        <input class="form-control" type="password" name="user_password" placeholder="Type your password" required="">
                    </div>
                    <div>
                        <span class="mt-5"><?php show();?></span>
                        
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" name="submit" type="submit">Login
                        </button>
                    </div>
                    <div class="form-group mb-1 text-white">
                            <span>Or
                            <a href="index_reg.php" class="nounderline text-white">
                                Sign Up
                            </a></span>
                    </div>
                </form>
            </div>
            <!--<img class="card-img-top mt-3" style="max-height: 6rem;" src="images/svg/sign in.svg" alt="">-->
    </div>
</body>
</html>