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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/SeatStockLogoFavicon3232.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock <?php echo $e_title; ?></title>
</head>
<body>
    <div class="container mt-5 shadow p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 30rem;">
        <div class="container p-1 mb-1 bg-blue-gradient rounded-lg" style="max-width: 28rem;">
            <h3 class="text-white"><?php echo $e_title; ?></h3>
        </div>
        <p>hosted by <?php echo $user_name; ?></p>
        <div class="img">
            <img src="../images/event_img/<?php echo $e_img?>" alt="" style="border-radius:40px;">
        </div>
        <div>
            <h4><?php echo $e_date;?></h4>
        </div>
        <div>
            <p> <?php echo $e_disc; ?></p>
        </div>
        <div>
            <h4>Available seats : <?php echo $e_no_seat; ?></h4>
        </div>
        <div>
            <h4>Price per seat : Rs <?php echo $e_tprice; ?></h4>
        </div>
        <div class="container p-3 bg-redish-gradient rounded-lg text-white" style="max-width: 28rem;">
            <h3>RESERVE HERE</h3>
            <form action="" method="post">
                <div class="form-group">
                    <h5>Select your seat</h5>
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
                <div class="form-group mb-1">
                    <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" name="submit" type="submit" value="Resave">RESERVE</button>
                </div>
            </form>
        </div>
        <div class="mt-3">
            <h6>Contact Host For More Details</h6>
            <p> Email : <?php echo $user_email; ?></p>
            <p> Telephone : <?php echo $user_tp; ?></p>
        </div>
    </div>
<?php }}} ?>
</body>
</html>
