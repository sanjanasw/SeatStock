<?php include "../includes/db.php";

     $query = "SELECT * FROM users";
     $result = mysqli_query($con, $query);
     if(!$result){
        die("FAILD!!".mysqli_error());
     }

     $query1 = "SELECT * FROM events";
     $result1 = mysqli_query($con, $query1);
     if(!$result1){
        die("FAILD!!".mysqli_error());
     }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SeatStock</title>
</head>

<body onload="checkpw()">
    <?php include "../includes/navbar.php"; ?>

    <div class="container">
        <br><br>
        <h1 class="text-center">Users</h1>
        <div class="col-sx-6">
            <table border="1">
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Contact Number</th>
                    <th>Role</th>
                    <th>Registered Date & Time</th>
                </tr>
                <?php
    while($row = mysqli_fetch_assoc($result)){
        $u0 = $row['user_id'];
        $u1 = $row['user_name'];
        $u2 = $row['user_fname'];
        $u3 = $row['user_lname'];
        $u5 = $row['user_gender'];
        $u6 = $row['user_tp'];
        $u7 = $row['user_role'];
        $u8 = $row['trn_date'];
        echo "<tr>";
             echo "<td>{$u0}</td>";
             echo "<td>{$u1}</td>";
             echo "<td>{$u2}</td>";
             echo "<td>{$u3}</td>";
             echo "<td>{$u5}</td>";
             echo "<td>{$u6}</td>";
             echo "<td>{$u7}</td>";
             echo "<td>{$u8}</td>";
             echo"<td><a href='approve.php?approve=$u0'>Approve</a></td>";
			 echo"<td><a href='approve.php?d1=$u0'>!Host</a></td>";
             echo"<td><a href='approve.php?d2=$u0'>Client</a></td>";
             echo"<td><a href='approve.php?delete=$u0'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
            </table>
        </div>
        <br><br>
        <h1 class="text-center">Events</h1>
        <div class="col-sx-6">
            <table border="1">
                <tr>
                    <th>Event Id</th>
                    <th>Event Title</th>
                    <th>Hosters User Id</th>
                    <th>Event Type</th>
                    <th>Event Date</th>
                </tr>
                <?php
    while($row1 = mysqli_fetch_assoc($result1)){
        $u1 = $row1['e_id'];
        $u2 = $row1['e_title'];
        $u3 = $row1['e_user_id'];
        $u5 = $row1['e_type'];
        $u6 = $row1['e_date'];
        echo "<tr>";
             echo "<td>{$u1}</td>";
             echo "<td>{$u2}</td>";
             echo "<td>{$u3}</td>";
             echo "<td>{$u5}</td>";
             echo "<td>{$u6}</td>";
             echo"<td><a href='approve.php?delete_e=$u1'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
            </table>
        </div>
    </div>
    <script>
        function checkpw() {
            var a = prompt("Enter Password : ");
            var b = "password";
            if (a != b) {
                alert("Invalid Password.");
                window.location = "../index.php";
            } else {
                alert("Welcome Team SEATSTOCK.");
            }
        }

    </script>
</body>

</html>
