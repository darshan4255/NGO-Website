<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:memloginreg.php');
}
 ?>
 <html>
 <head>
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="assets/css/memberstyle.css">
<title>member login and registration</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
   <div class="container">
   <a class="float-right" href="memlogout.php">Logout</a>
  <h1> Welcome <?php echo $_SESSION['username']; ?></h1>
<div>
 </body>
 </html>
