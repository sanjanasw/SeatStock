<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="container">
       <br><br><br>
       
       <form action="" method="post" enctype="multipart/form-data">
			<label>Event : </label>
			<select name="selected">
				<?php
					$query4 = "SELECT * FROM events WHERE e_user_id = $rslt";
					$rslt1 = mysqli_query($con,$query4);
					while($row3 = mysqli_fetch_assoc($rslt1)){
						$e_title = $row3['e_title'];
                        $e_id = $row3['e_id'];
				
				
				echo"<option value='{$e_id}'>$e_title</option>";
					}
				?>				
            </select>
       <input type="submit" name="submit" class="btn btn-primary" value="Select">       
    </form>
       
       
        <br><br>
        <h1 class="text-center">Users</h1>
        <div class="col-sx-6">
            <table border="1">
                <tr>
                    <th>Seat Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                </tr>
                <?php
                
                 if(isset($_POST['submit'])){
		      $e_id = $_POST['selected'];
        
              $query1 = "SELECT * FROM A$e_id";
            $result = mysqli_query($con,$query1);
                 }
            if(!$result){
            die("<h1>Select One Option<h1>".mysqli_error($con));
        }
    
    
    while($row1 = mysqli_fetch_assoc($result)){
        			
        $t_id = $row1['t_id'];
		$user_id = $row1['user_id'];
        
        
    $query2 = "SELECT * FROM users WHERE user_id = $user_id";
    $result2 = mysqli_query($con,$query2);
        
        while($row2 = mysqli_fetch_assoc($result2)){
        			
        $user_fname = $row2['user_fname'];
        $user_lname = $row2['user_lname'];
        $user_email = $row2['user_email'];
        $user_gender = $row2['user_gender'];
		$user_tp = $row2['user_tp'];

        echo "<tr>";
             echo "<td>{$t_id}</td>";
             echo "<td>{$user_fname}</td>";
             echo "<td>{$user_lname}</td>";
             echo "<td>{$user_gender}</td>";
             echo "<td>{$user_tp}</td>";
             echo "<td>{$user_email}</td>";

        echo "</tr>";
    }
        }
        
    ?>
            </table>
        </div>
    </div>
</body>

</html>
