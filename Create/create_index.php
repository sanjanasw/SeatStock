<?php 
include "create.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <H1>Welcome <?php echo $_SESSION['username']; ?>!</H1>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="e_title" >
        </div>
        <div>
            <input type="radio" name="e_type" value="E" checked> Event
            <input type="radio" name="e_type" value="T"> Travel
        </div>
        <div class="form-group">
            <label>No OF Seates</label>
            <input type="text" class="form-control" name="e_no_seat">
        </div>
        <div class="form-group">
            <label>Ticket Price</label>
            <input type="text" class="form-control" name="e_tprice">
        </div>
        <div class="form-group">
            <label>Post Image</label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Event Discription</label>
            <input type="text" class="form-control " name="e_disc">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
        </div>
    </form>


</body>

</html>
