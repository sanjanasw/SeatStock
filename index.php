<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <script src="./bootstrap/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="icon" href="images/SeatStockLogo.ico" type="image/gif" sizes="48x48">
  <title>SeatStock</title>
</head>
<body>
 <?php include "includes/navbar.php"; ?>
  <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg" style="max-width: 30rem;">
    <div class="row text-center">
      <div class="col">
        <h1>I WANT TO</h1>
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg bg-blue-gradient"><a href = "events/event_index.php" class="text-white nounderline"> FIND AND BOOK</a></button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg bg-blue-gradient"><a href = "create/create_index.php" class="text-white nounderline"> MAKE AND VEND</a></button>
      </div>
    </div>
  </div>
</body>
</html>
