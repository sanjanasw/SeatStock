<?php include "../includes/db.php";

     global $con;
     global $result;
     $query = "SELECT * FROM users";
     $result = mysqli_query($con, $query);
     if(!$result){
        die("FAILD!!".mysqli_error());
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock</title>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>
    
    <div class="container">
     <br><br>
      <h1 class="text-center">Users</h1>
       <div class="col-sx-6">
       <table border="1">
       <tr>
           <th>User Name</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Gender</th>
           <th>Contact Number</th>
           <th>Role</th>
           <th>Registered Date & Time</th>
       </tr>
      <?php
    global $result;
    while($row = mysqli_fetch_assoc($result)){
        $u1 = $row['user_name'];
        $u2 = $row['user_fname'];
        $u3 = $row['user_lname'];
        $u5 = $row['user_gender'];
        $u6 = $row['user_tp'];
        $u7 = $row['user_role'];
        $u8 = $row['trn_date'];
        $user_id = $row['user_id'];
        echo "<tr>";
             echo "<td>{$u1}</td>";
             echo "<td>{$u2}</td>";
             echo "<td>{$u3}</td>";
             echo "<td>{$u5}</td>";
             echo "<td>{$u6}</td>";
             echo "<td>{$u7}</td>";
             echo "<td>{$u8}</td>";
             echo"<td><a href='approve.php?approve=$user_id'>Approve</a></td>";
			 echo"<td><a href='approve.php?d1=$user_id'>!Host</a></td>";
             echo"<td><a href='approve.php?d2=$user_id'>Client</a></td>";
             echo"<td><a href='approve.php?delete=$user_id'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
       </table>         
        </div>
    </div>
</body>
</html>