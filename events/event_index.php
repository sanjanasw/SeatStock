<?php
include "../includes/db.php";
include "../includes/auth.php";
?>
<!DOCTYPE html>
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
    <title>SeatStock Find Event</title>
</head>
<body>
    <div class="container mt-5 shadow p-3 bg-white rounded-lg text-center" style="max-width: 30rem;">
        <div class="container p-3 rounded-lg" style="max-width: 28rem;">
        <form action="../events/search_event_index.php" method="post">
            <input class="form-control mb-2" type="text" name="sk" placeholder="Type here">
            <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" name="submit" type="submit">Search</button>
        </form>
        </div>
    </div>
    <?php
	$query = "SELECT * FROM events";
    $select_all_events = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($select_all_events)){
		$e_id = $row['e_id'];
        $e_title = $row['e_title'];
		$e_img = $row['e_img'];
        $e_tprice = $row['e_tprice'];
        $e_date = $row['e_date'];
    ?>
    <div class="container mt-5 shadow p-3 bg-white rounded-lg" style="max-width: 30rem;">
        <div class="img-fluid mx-auto"  style="max-width: 20rem;max-height:10rem;">
            <a href="events.php?id=<?php echo $e_id;?>"><img src="../images/event_img/<?php echo $e_img?>" class="mt-n5" alt="" style="border-radius:40px;"></a>
        </div>
        <div>
            <h4 class=" nounderline text-uppercase pt-2"><a href="events.php?id=<?php echo $e_id;?>"><?php echo $e_title;?></a></h4>
            <h6 class=""><?php echo $e_date;?></h6>
            <p>Rs: <?php echo $e_tprice;?></p>
            <a href="events.php?id=<?php echo $e_id;?>" class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;">BOOK NOW</a>
        </div>
    </div>
    <?php } ?>
</body>
</html>