<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
//require("element/nav.php");
?>
<!--<div class="loginleftbox"></div>-->
   <form class="login_frm text-light animate__animated animate__bounceIn">
     <center><h1>Login Now </h1></center>
     <center class="mt-5 mb-2 d-none text"><span class="alert alert-warning text-center p-2  mb-0 msg"></span></center>
     <div class="form-group">
       <label for="phone">Mobile Number</label>
       <input type="number" name="phone" id="phone" autocomplete="off">
     </div>
     <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="password" id="password" autocomplete="off">
     </div>
     <center><button id="lbtn" type="submit" name="submit">Login</button></center>
     <center><p>create a account\<a href="index.php">signup</a></p></center>
     <center><p>forgotten password\<a href="login.php">reset</a></p></center>
   </form>

<!--<script src="js/validation.js"></script> --> 
<script src="js/ajax.js"></script>
</body>
</html>