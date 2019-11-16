<link rel="stylesheet" href="https://sstesst.runkodapps.com/bootstrap.css">
<script src="https://gaia.blockstack.org/hub/1ERk5fJb3w8Urp3JymYWfuuxAkrUrrfz2R/e7b95cbedc7ff45b3fe141834a86358e.js"></script>


<nav class="navbar navbar-expand-md navbar-dark bg-blue-gradient">
  <a class="navbar-brand" href="index.php">
    <img src="./images/favicon/SeatStock Logo Inveted.svg" width="32" height="32" class="d-inline-block align-top" alt="">
    SeatStock
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collNav">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php
if ( isset( $_SESSION['username'] ) )
{
?>
  <div class="collapse navbar-collapse" id="collNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white mr-3" href="#" id="drop1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu text-white bg-blue-gradient" aria-labelledby="drop1">
          <a class="dropdown-item text-white bg-blue-gradient" href="#">Edit Profile</a>
          <a class="dropdown-item text-white bg-blue-gradient" href="#">My Bookings</a>
          <a class="dropdown-item text-white bg-blue-gradient" href="#">My Events</a>
          <a class="dropdown-item text-white bg-blue-gradient" href="#">&nbsp;-&nbsp;Reserve As</a>
          <a class="dropdown-item text-white bg-blue-gradient" href="#">Log Out</a>
        </div>
      </li>
      <li class="nav-item mr-3">
            <a class="nav-link text-white" href="#">FAQ</a>
      </li>
    </ul>
  </div>
<?php
}
else
{
?>
    <div class="collapse navbar-collapse" id="collNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
        <a class="nav-link text-white" href="#">Sign Up</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link text-white" href="#">Log In</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link text-white" href="#">FAQ</a>
      </li>
    </ul>
  </div>
<?php
}
?>
</nav>