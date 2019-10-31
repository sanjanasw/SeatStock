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
    <title>All Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
           <th>Registered Date</th>
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
        echo "<tr>";
             echo "<td>{$u1}</td>";
             echo "<td>{$u2}</td>";
             echo "<td>{$u3}</td>";
             echo "<td>{$u5}</td>";
             echo "<td>{$u6}</td>";
             echo "<td>{$u7}</td>";
             echo "<td>{$u8}</td>";
        echo "</tr>";
    }
    ?>
       </table>
        </div>
    </div>
</body>
</html>