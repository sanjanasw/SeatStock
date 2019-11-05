<?php
include "../includes/db.php";
include "../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <H1 style="color:Blue;">Welcome <?php echo $_SESSION['username']; ?>!</H1>
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
    <div style="float : left;">
        <h2><a href="events.php?id=<?php echo $e_id;?>"><?php echo $e_title;?></a></h2>
        <h4><?php echo $e_date;?></h4>
        <hr>
        <img src="../images/event_img/<?php echo $e_img?>" alt="">
        <hr>
        <p>Rs: <?php echo $e_tprice;?></p>
        <a class="btn btn-primary" href="events.php?id=<?php echo $e_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        <hr>
    </div>
    <?php } ?>
</body>

</html>
