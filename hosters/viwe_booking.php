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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock</title>
</head>

<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 50rem;">
        <div class="container shadow-lg p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 48rem;">
            <form action="" method="post" enctype="multipart/form-data">
                <label class="text-white">Event : </label>
                <select name="selected" class="btn btn-primary dropdown-toggle">
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
        </div>
        <div class="container shadow-lg p-3 bg-redish-gradient rounded-lg" style="max-width: 48rem;">
        <h1 class="text-center">Reservations</h1>
        <div class="col-sx-6">
            <table class="table-bordered table-info table-hover">
                <tr class="table-danger">
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

        echo "<tr class='table-warning'>";
             echo "<td>{$t_id}</td>";
             echo "<td>{$user_fname}</td>";
             echo "<td>{$user_lname}</td>";
             echo "<td>{$user_gender}</td>";
             echo "<td>{$user_tp}</td>";
             echo "<td>{$user_email}</td>";

        echo "</tr>";
        }
        $query3 = "SELECT * FROM guest WHERE guser_id = $user_id";
        $result3 = mysqli_query($con,$query3);
        
        while($row3 = mysqli_fetch_assoc($result3)){
            $guser_fname = $row3['guser_fname'];
            $guser_lname = $row3['guser_lname'];
            $guser_gender = $row3['guser_gender'];
		    $guser_tp = $row3['guser_tp'];
            
        echo "<tr>";
             echo "<td>{$t_id}</td>";
             echo "<td>{$guser_fname}</td>";
             echo "<td>{$guser_lname}</td>";
             echo "<td>{$guser_gender}</td>";
             echo "<td>{$guser_tp}</td>";

        echo "</tr>";
    
        }
    }
    ?>
            </table>
        </div>
        </div>
    </div>
</body>

</html>
