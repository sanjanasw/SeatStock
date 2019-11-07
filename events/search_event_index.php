<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
include "../includes/db.php";
include "../includes/auth.php";
    
    $name = $_SESSION['username'];

    if(isset($_POST['submit'])){
        $sk = $_POST['sk'];
        
        $query = "SELECT * FROM events WHERE e_title LIKE '%$sk%' ";
        $result = mysqli_query($con, $query);
        
        if(!$result){
            die("Failed" . mysqli_error ($con));
        }
        
        $count = mysqli_num_rows($result);
        if($count == 0){
    ?>
    <H1 style="color:Blue;">Welcome <?php echo $_SESSION['username']; ?>!</H1>
    <br>
    <form action="../events/search_event_index.php" method="post">
        <label>Search</label>
        <input type="text" name="sk" placeholder="Search">
        <input type="submit" name="submit">
    </form>
    <br><br>
    <h1>No Event Found!!</h1>

    <?php
        }else{
            while($row = mysqli_fetch_assoc($result)){
                $e_id = $row['e_id'];				
                $e_title = $row['e_title'];
                $e_img = $row['e_img'];
                $e_tprice = $row['e_tprice'];
                $e_date = $row['e_date'];
            }
?>
    <!DOCTYPE html>
    <H1 style="color:Blue;">Welcome <?php echo $_SESSION['username']; ?>!</H1>
    <br>
    <form action="../events/search_event_index.php" method="post">
        <label>Search</label>
        <input type="text" name="sk" placeholder="Search">
        <input type="submit" name="submit">
    </form>
    <br><br>
    <div style="float : left;">
        <h2><a href="events.php?id=<?php echo $e_id;?>"><?php echo $e_title;?></a></h2>
        <h4><?php echo $e_date;?></h4>
        <hr>
        <img src="../images/event_img/<?php echo $e_img?>" alt="">
        <hr>
        <p>Rs: <?php echo $e_tprice;?></p>
        <a class="btn btn-primary" href="events.php?id=<?php echo $e_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        <hr>
    </div>
    <?php } }?>

</body>

</html>
