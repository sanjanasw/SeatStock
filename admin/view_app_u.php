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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Seatstock-Admin</title>
</head>

<body onload="checkpw()">

    <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 70rem;">
       
        <button class="btn btn-primary p-3 mb-3  btn-link btn-wd btn-lg bg-redish-gradient btn-outline-danger text-white nounderline" style="width:100%;"  onclick="home()"><h1>Admin Panel</h1></button>
        
        <div class="container shadow-lg p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 68rem;">
            <h1 class="text-center text-white">Users</h1>
        </div>
        <div class="container shadow-lg p-3 mb-3 bg-redish-gradient rounded-lg" style="max-width: 68rem;">
           <center>
            <table class="table-danger table-hover">
                <tr class="table-warning">
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
             echo"<td><a class='btn btn-success btn-sm' href='approve.php?approve=$u0'>Approve</a></td>";
			 echo"<td><a class='btn btn-warning btn-sm' href='approve.php?d1=$u0'>!Host</a></td>";
             echo"<td><a class='btn btn-dark btn-sm' href='approve.php?d2=$u0'>Client</a></td>";
             echo"<td><a class='btn btn-danger btn-sm' href='approve.php?delete=$u0'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
            </table>
            </center>
        </div>
        <div class="container shadow-lg p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 68rem;">
            <h1 class="text-center text-white">Events</h1>
        </div>
        <div class="container shadow-lg p-3 bg-redish-gradient rounded-lg" style="max-width: 68rem;">
           <center>
            <table class="table-danger table-hover">
                <tr class='table-warning'>
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
             echo"<td><a class='btn btn-danger btn-sm' href='approve.php?delete_e=$u1'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
            </table>
            </center>
        </div>
    </div>
    <script>
        function checkpw() {
            var a = prompt("Hi Admin", "Enter Password : ");
            var b = "password";
            if (a != b) {
                alert("Invalid Password.");
                window.location = "../index.php";
            } else {
                alert("Welcome Team SEATSTOCK.");
            }
        }

        function home() {
            window.location = "../index.php";
        }

    </script>
</body>

</html>
