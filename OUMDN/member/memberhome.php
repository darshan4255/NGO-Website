<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:memloginreg.php');
}
 ?>
 <html>
 <head>
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="assets/css/memberstyle2.css">
<title>member login and registration</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
   <div class="container">
<!--   <a class="float-right" class href="memlogout.php">Logout</a>-->
   <button type="button" class="btn btn-primary float-right topright"  onclick="location.href='memlogout.php'">Sign Out</button>
  <h1> Welcome <?php echo $_SESSION['username']; ?>,</h1>
<div>
 </body>
 </html>
