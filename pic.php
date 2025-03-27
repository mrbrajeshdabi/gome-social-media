<?php
require("php/db.php");
if(isset($_COOKIE['_aut_ui_']) != 1)
{
    header("Location:login.php");
}
$unique_id = $_COOKIE['_aut_ui_'];
$sql = $db->query("SELECT * FROM users WHERE unique_id='{$unique_id}'");
$data = $sql->fetch_assoc();
if($data['profilepic'] != "NULL")
{
  header("Location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
   <div class="box">
     <center>
       <div class="picbox">
       <i class="fa fa-users" id="usericon"></i>
       <img src="pic.jpg" alt="hey" id="img">
     </div>
     </center>
     <center>
       <div class="userdettails">
       <h1><?php echo $data['fullname'] ?></h1>
       <p><?php echo $data['email'] ?></p>
       <p><?php echo $data['phone'] ?></p>
     </div>
     </center>
     <center><button id="nextbtn" type="button" class="d-none nextbtn">Next</button></center>
   </div>

<script src="js/ajax.js"></script>
</body>
</html>