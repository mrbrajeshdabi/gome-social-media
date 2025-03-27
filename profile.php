<?php

if(isset($_COOKIE['_aut_ui_']) != 1)
{
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>profile</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body id="body">
 
 <div class="row p-0 m-0">
   <div class="col-md-2 left p-0 m-0 text-dark">
   <div class="mobilenav">
   <nav class="narvbar navbar-expand-md navbar-dark bg-dark text-light fixed-top">
        <ul class="nav navbar">
          <li class="nav-item ms-2"><i class="fa fa-home text-light fs-5 menu" plink="home" id="home"></i></li>
          <li class="nav-item ms-2"><i class="fa fa-bell text-light fs-5 menu" plink="notification" id="bell"></i></li>
          <li class="nav-item"><i class="fa fa-upload text-light fs-5 menu"  plink="uploadpic2"></i></li>
          <li class="nav-item"><i class="fa fa-user-plus text-light fs-5 menu" plink="friends"></i></li>
          <li class="nav-item"><i class="fa fa-user-circle text-light fs-5 menu" plink="myprofile"></i></li>
          <li class="nav-item"><a href="logout.php" target="_self"><i class="fa fa-sign-out text-light fs-5 menu"></i></a></li>
        </ul>
      </nav>
   </div>
   <nav class="narvbar navbar-expand-md navbar-dark bg-dark text-light sticky-top">
     <div class="desktopnav">
     <div class="card">
       <div class="card-header text-light bg-dark">
         <h1 class="text-info">GoMe</h1>
       </div>
       <div class="card-body">
         <ul class="list-group text-center">
           <li class="list-group-item menu active bg-dark text-danger" plink="home" id="home"><i class="fa fa-home"></i></li>
           <li class="list-group-item menu " plink="notification" id="notifi"><i class="fa fa-bell"></i></li>
           <li class="list-group-item menu " plink="friends" id="user"><i class="fa fa-users"></i></li>
           <!--<li class="list-group-item " pid="reels"><i class="fa fa-cubes"></i></li>-->
           <li class="list-group-item menu" plink="uploadpic2" id="plus"><i class="fa fa-plus-square-o"></i></li>
           <li class="list-group-item menu "  plink="myprofile" id="myprofile"><i class="fa fa-user-circle"></i></li>
           <li class="list-group-item menu "><a href="logout.php" target="_self"><i class="fa fa-sign-out" id="logout"></i></a></li>
         </ul>
       </div>
       <div class="card-footer"></div>
     </div>
     </div>
</nav>
   </div>
   <div class="col-md-10 right p-0 m-0 text-light">
    
   </div>
 </div> 
 <div class="loader"></div> 
 <div class="loadbox d-flex justify-content-center align-items-center d-none">
 <div class="spinner-border text-danger" role="status">
  <span class="visually-hidden"></span>
</div>
 </div>
<script src="js/p.js"></script>
</body>
</html>