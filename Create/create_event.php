<?php
include "db.php";

session_start();
if(!isset($_SESSION["username"])){
header("Location: \SeatStock\index_log.php");
exit(); } 

$name = ($_SESSION['username']);
$query = "SELECT user_id FROM users WHERE user_name = '$name'";
$result = mysqli_query($con, $query);
        if(!$result){
            die("FAILD!!".mysqli_error());
        }
while($row = mysqli_fetch_assoc($result)){
             $rslt = $row['user_id'];
}


if(isset($_POST['submit'])){
		$e_title = $_POST['e_title'];
		$e_disc = $_POST['e_disc'];
		$e_no_seat = $_POST['e_no_seat'];
		$e_tprice = $_POST['e_tprice'];
		$e_img = $_FILES['image']['name'];
		$e_img_temp = $_FILES['image']['tmp_name'];
//		$post_tags = $_POST['post_tags'];
//		$post_content = $_POST['post_content'];
//		$post_date = date('d-m-y');
		
		
		move_uploaded_file($e_img_temp,"../images/event_img/$e_img");
		
		
		$query = "INSERT INTO events(e_title,e_disc,e_no_seat,e_img,e_tprice,e_user_id) ";
		$query .= "VALUES('{$e_title }','{$e_disc}','{$e_no_seat}','{$e_img}','{$e_tprice}','{$rslt}')";
		
		$result1 = mysqli_query($con,$query);
		if(!$result1){
			die('query failed'.mysqli_error($con));
		}
	}


?>
