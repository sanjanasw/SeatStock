<?php
include "../includes/db.php";
	$query = "SELECT * FROM events";
    $select_all_events = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($select_all_events)){
		$e_id = $row['e_id'];				
        $e_title = $row['e_title'];
		$e_user_id = $row['e_user_id'];
		$e_no_seat = $row['e_no_seat'];
		$e_disc = $row['e_disc'];
		$e_img = $row['e_img'];
        $e_tprice = $row['e_tprice'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <h2>
        <a href="events.php?id=<?php echo $e_id;?>"><?php echo $e_title;?></a>
    </h2>
    <p>
        by <a href="index.php"><?php echo $e_user_id;?></a>
    </p>
    <hr>
    <img src="../images/event_img/<?php echo $e_img?>" alt="">
    <hr>
    <p><?php echo $e_tprice;?>.</p>
    <a class="btn btn-primary" href="events.php?id=<?php echo $e_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
<?php } ?>
</body>

</html>
