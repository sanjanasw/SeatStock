<?php
include "../includes/db.php";
include "../includes/auth.php";

$name = $_SESSION['username'];
$query = "SELECT user_id FROM users WHERE user_name = '$name'";
    $get_id = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($get_id)){
        $current_user_id = $row['user_id'];
    }

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
        $e_date = $row['e_date'];
    
    $query2 = "SELECT * FROM users WHERE user_id = '$e_user_id'";
    $select_all_users = mysqli_query($con,$query2);
    while($row2 = mysqli_fetch_assoc($select_all_users)){
						
        $user_name = $row2['user_name'];
        $user_email = $row2['user_email'];
		$user_tp = $row2['user_tp'];
        
            
        $query = "SELECT e_id FROM events WHERE e_title = '{$e_title}'";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("FAILD!!".mysqli_error($con));
        }
        while($row = mysqli_fetch_assoc($result)){
             $rslt1 = $row['e_id'];
        }
        
    
        
    if(isset($_POST['submit'])){
		$t_id = $_POST['selected'];
        
    $query3 = "UPDATE A$rslt1 SET user_id =  $current_user_id WHERE t_id = $t_id ";
        
    $result = mysqli_query($con,$query3);
        if(!$result){
            die("Error in updating category".mysqli_error($con));
        }
    }
        

        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $e_title; ?></h1>
    <p> by <?php echo $user_name; ?></p>
    <h4><?php echo $e_date;?></h4>
    <hr>
    <img src="../images/event_img/<?php echo $e_img?>" alt="">
    <hr>
    <p> <?php echo $e_disc; ?></p>
    <p> Seats : <?php echo $e_no_seat; ?></p>
    <p> Price : Rs <?php echo $e_tprice; ?></p>
    <h4>Contact Us For More Details</h4>
    <p> Email : <?php echo $user_email; ?></p>
    <p> Hotline : <?php echo $user_tp; ?></p>
    <?php }}} ?>

    <hr>
    <h3>Select Seat Number And Resave.</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Seat Number</label>
            <select name="selected">
                <?php
					$query = "SELECT * FROM A$rslt1";
					$rslt = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($rslt)){
						$t_id = $row['t_id'];
                        $user_id = $row['user_id'];
				
				    if($user_id==0){
                        echo"<option value='{$t_id}'>Seat No: $t_id</option>";
                    }
				
					}
				?>
            </select>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Resave">
    </form>

</body>

</html>
