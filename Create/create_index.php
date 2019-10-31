<?php 
include "create.php";

?>
<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <title>SeatStock</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- Material Kit CSS -->
   <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
 </head>
 
 <body>
   <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
     <div class="container">
       <div class="navbar-translate">
         <a class="navbar-brand" href="">
           SeatStock </a><!--
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="sr-only">Toggle navigation</span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
         </button>-->
       </div>
       <!--<div class="collapse navbar-collapse">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a href="#register" class="btn btn-rose btn-raised btn-round " data-toggle="dropdown">
               Register
             <div class="ripple-container"></div></a>
           </li>
         </ul>
       </div>-->
     </div>
   </nav>

   <div class="container mt-5")>
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
          <form class="form" meaction="" method="post" enctype="multipart/form-data">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">LETS CREATE YOUR EVENT</h4>
            </div>
            <p class="description text-center"><?php echo $_SESSION['username']; ?> tell us about your event!</p>
            
            
            <div class="card-body">
              
                    <div class="form-group">
                            <label>Give your thing a name!</label>
                            <input type="text" class="form-control" name="e_title" placeholder="Green Fiesta, NSBM-KANDY Bus, ...">
                    </div>


                    <div class="form-group form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input " type="radio" name="e_type" value="E" checked>
                                EVENT
                                <span class="circle">
                                        <span class="check"></span>
                                </span>
                            </label>
                    </div>


                    <div class="form-group form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input " type="radio" name="e_type" value="E" >
                                TRANSPORT
                                <span class="circle">
                                        <span class="check"></span>
                                </span>
                            </label>
                    </div>
                    
                    <div class="form-group">
                        <label>How many seats are there?</label>
                        <input type="text" class="form-control" name="e_no_seat" placeholder="42, 300, ...">
                    </div>

                    <div class="form-group">
                            <label>Ticket Price (in LKR)</label>
                            <input type="text" class="form-control" name="e_tprice" placeholder="Rs 500.00, Rs 2000.00, ...">
                    </div>

                    
                    <div class="form-group">
                        <label>Choose an image</label>
                        <div class="custom-file">
                                <label class="custom-file-label" for="customFile"></label>
                                <input type="file" class="custom-file-input" id="customFile"  name="image">
                        </div>
                    </div>

                    <div class="form-group">
                            <label>Event description</label>
                            <input type="text" class="form-control " name="e_disc">
                    </div>

            </div>


            <div class="footer text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   
    



   <footer class="footer footer-default">
     <div class="container">
       <div class="copyright float-right">
         &copy;
         <script>
           document.write(new Date().getFullYear())
         </script>, made with <i class="material-icons">favorite</i> by SeatStock
     </div>
       </div>
   </footer>
 </body>
 
 </html>
 