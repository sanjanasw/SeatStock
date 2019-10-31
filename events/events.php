<?php
include "../includes/db.php";
    if(isset($_GET['id'])){
        $e_id = $_GET['id'];
	$query = "SELECT * FROM events WHERE e_id = '$e_id'";
    $select_all_events = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($select_all_events)){
						
        $e_title = $row['e_title'];
		$e_user_id = $row['e_user_id'];
		$e_no_seat = $row['e_no_seat'];
		$e_disc = $row['e_disc'];
		$e_img = $row['e_img'];
        $e_tprice = $row['e_tprice'];
    
    $query2 = "SELECT * FROM users WHERE user_id = '$e_user_id'";
    $select_all_users = mysqli_query($con,$query2);
    while($row2 = mysqli_fetch_assoc($select_all_users)){
						
        $user_name = $row2['user_name'];
        $user_email = $row2['user_email'];
		$user_tp = $row2['user_tp'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $e_title; ?></h1>
    <p> by  <?php echo $user_name; ?></p>
    <hr>
    <img src="../images/event_img/<?php echo $e_img?>" alt="">
    <hr>
    <p>   <?php echo $e_disc; ?></p>
    <p>   <?php echo $e_no_seat; ?></p>
    <p>   <?php echo $e_no_seat; ?></p>
    <p>   <?php echo $e_tprice; ?></p>
    <p>   <?php echo $user_email; ?></p>
    <p> <?php echo $user_tp; ?></p>
    <?php }}} ?>
</body>
</html>