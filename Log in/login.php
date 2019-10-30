<?php
   include "ConDB.php" ;
    if(isset($_POST['submit'])){
      
      $user_name = $_POST['user_name'];
      $user_password = $_POST['user_password']; 
       
       
          $query = "SELECT user_password FROM users ";
            $query .= "WHERE user_name= '$user_name' ";    
            $result = mysqli_query($connect, $query);
        if(!$result){
            die("FAILD!!".mysqli_error($connect));
        }
      while($row = mysqli_fetch_assoc($result)){
             $rsltpass = $row['user_password'];
          
          
          if($user_password == $rsltpass){
              header("location: welcome.php");
          }else
              header("location: index.php");
      }
   }
?>