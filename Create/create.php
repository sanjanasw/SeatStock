<?php
global $error;
include "../includes/db.php";
include "../includes/auth.php";

$name = ($_SESSION['username']);
$query = "SELECT user_id,user_role FROM users WHERE user_name = '$name'";
$result = mysqli_query($con, $query);
        if(!$result){
            die("FAILD!!".mysqli_error());
        }
while($row = mysqli_fetch_assoc($result)){
             $rslt = $row['user_id'];
             $check = $row['user_role'];
}


if(isset($_POST['submit'])){
		$e_title = $_POST['e_title'];
		$e_disc = $_POST['e_disc'];
		$e_no_seat = $_POST['e_no_seat'];
		$e_tprice = $_POST['e_tprice'];
		$e_img = $_FILES['image']['name'];
		$e_img_temp = $_FILES['image']['tmp_name'];
        $e_type = $_POST['e_type'];
        $e_date = $_POST['e_date'];
		
if($check=="A"){
            
		move_uploaded_file($e_img_temp,"../images/event_img/$e_img");
		
		
		$query = "INSERT INTO events(e_title,e_disc,e_no_seat,e_img,e_tprice,e_user_id,e_type,e_date)";
		$query .= "VALUES('{$e_title }','{$e_disc}','{$e_no_seat}','{$e_img}','{$e_tprice}','{$rslt}','{$e_type}', '{$e_date}')";
		
		$result1 = mysqli_query($con,$query);
		if(!$result1){
			die('query failed'.mysqli_error($con));
		}
            
        $query = "SELECT e_id FROM events WHERE e_title = '{$e_title}'";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("FAILD!!".mysqli_error($con));
        }
        while($row = mysqli_fetch_assoc($result)){
             $rslt = $row['e_id'];
        }            
            
        $query1 = "CREATE TABLE A$rslt (
                    t_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    e_id INT NOT NULL,
                    user_id INT NOT NULL
                    )";
        $result2 = mysqli_query($con,$query1);
		if(!$result2){
			die('query failed'.mysqli_error($con));
		}
            

        for ($x = 1; $x <= $e_no_seat; $x++) {
            $query = "INSERT INTO A$rslt (t_id, e_id) VALUES('$x','$rslt') ";
            $result3 = mysqli_query($con,$query);
		    if(!$result3){
			     die('query failed'.mysqli_error($con));
		    }
        }
            
        header("Location: ../index.php");
        
        }else if($check=="H"){
            $error=100;
        }else{
            $error=200;
}
	}

    function show(){    
    global $error;
    if($error==100){
        echo "<p style='color:black;'>*Your Account Not Approved Yet. Please Wait For Admins Approval</p>";
    }else if($error==200){
        echo "<p style='color:black;'>*Client Account Can't Host Event</p>";
    }
    }

?>
