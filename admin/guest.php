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
    if($check=='A'){
       if (isset($_POST['submit1'])){
                    $rslt10 = ($_POST['selected1']);
                    }
    }else{
        echo "Only Hosters Can Operate This";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <form action="" method="post" enctype="multipart/form-data">
        <label>Event : </label>
        <select name="selected1">
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
        <input type="submit" name="submit1" class="btn btn-primary" value="Select">
    </form>
    <br><br>
    
    <h3>Select Seat Number And Resave.</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Seat Number</label>
            <select name="selected">
                <?php
					$query = "SELECT * FROM A$rslt10";
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
            <input type="radio" name="name" value="<?php echo $rslt10; ?>" checked="checked" style="display: none;">
                    <lable>F Name</lable>
        <input type="text" name="guser_fname">
        <lable>L Name</lable>
        <input type="text" name="guser_lname">
        <lable>Gender</lable>
        <input type="radio" name="guser_gender" value="M" checked="checked">Male
        <input type="radio" name="guser_gender" value="F">Female
        <lable>Contact</lable>
        <input type="text" name="guser_tp">
        <input type="submit" name="submit" value="Add User">
    
        </div>
    </form>
       <br><br><br>
        <table border="1">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Contact Number</th>
                </tr>
                <?php
                $query3 = "SELECT * FROM guest";
        $result3 = mysqli_query($con,$query3);
        
        while($row3 = mysqli_fetch_assoc($result3)){
            $guser_id = $row3['guser_id'];
            $guser_fname = $row3['guser_fname'];
            $guser_lname = $row3['guser_lname'];
            $guser_gender = $row3['guser_gender'];
		    $guser_tp = $row3['guser_tp'];
        echo "<tr>";
             echo "<td>{$guser_fname}</td>";
             echo "<td>{$guser_lname}</td>";
             echo "<td>{$guser_gender}</td>";
             echo "<td>{$guser_tp}</td>";
    
        }

    ?>
        <?php
        
         if(isset($_POST['submit'])){
		  $t_id = $_POST['selected'];
          $name = $_POST['name'];
             echo $t_id;
             echo $name;
             
        $user_fname = ($_POST['guser_fname']);
		$user_lname = ($_POST['guser_lname']);
        $user_gender = ($_POST['guser_gender']);
        $user_tp = ($_POST['guser_tp']);
             
        if($user_tp!=0 && $user_fname!="" && $user_gender!=""){
        $query = "INSERT into guest (guser_fname, guser_lname, guser_gender, guser_tp) VALUES ('$user_fname','$user_lname' ,'$user_gender','$user_tp')";
        $result = mysqli_query($con,$query);
    
        $query5 = "SELECT guser_id FROM guest WHERE guser_fname = '{$user_fname}'";
        $rslt2 = mysqli_query($con,$query5);
        while($row = mysqli_fetch_assoc($rslt2)){
						$guser_id = $row['guser_id'];
            echo $guser_id;
        }
        
    $query3 = "UPDATE A$name SET user_id =  $guser_id WHERE t_id = $t_id ";
        
    $result = mysqli_query($con,$query3);
        if(!$result){
            die("Error in updating category".mysqli_error($con));
        }
    }else{
            echo "Fill Requied Fields";
        }
           }
        ?>
</body>
</html>