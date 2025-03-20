<?php
require("db.php");
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$username = mysqli_real_escape_string($db,$_POST['uname']); 
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$t = time();
$unique_id = rand(8,$t);
$date = date("Y-m-d");
$time =  date("h:i:sa");
$msg = "";
//check table
$chktable = $db->query("SELECT * FROM users");
if($chktable)
{
     //check all input filled
     if(!empty($fname) AND !empty($email) AND !empty($phone) AND !empty($password) AND !empty($username))
     {
         //check email
         if(filter_var($email,FILTER_VALIDATE_EMAIL))
         {
             $chkemail = $db->query("SELECT * FROM users WHERE email='$email'");
             if($chkemail->num_rows == 0)
             {
                 $store = $db->query("INSERT INTO users(unique_id,username,fullname,email,phone,password,registerdate,updatedate)VALUES('{$unique_id}','{$username}','{$fname}','{$email}','{$phone}','{$password}','{$date}','{$date}')");
                 if($store)
                 {
                    mkdir("../users/".$unique_id);
                    $msg = array("status"=>"200","msg"=>"success","path"=>"login.php");
                    echo json_encode($msg);
                 }
                 else
                 {
                     echo "data not stored";
                 }
             }
             else
             {
                 $msg = array("status"=>"false","msg"=>"email allready exit");
                 echo json_encode($msg);
             }
         }
         else
         {
            $msg = array("status"=>"false","msg"=>"Filled Valid Email");
            echo json_encode($msg);
         }
     }
     else
     {
        $msg = array("status"=>"false","msg"=>"Filled All Input");
        echo json_encode($msg);
     }
}
else
{
    $createtable = $db->query("CREATE TABLE users(
    
    id INT(255) NOT NULL AUTO_INCREMENT,
    unique_id INT(100),
    profilepic TEXT(2000) DEFAULT 'NULL',
    username VARCHAR(100),
    fullname VARCHAR(100),
    email    VARCHAR(80),
    phone    VARCHAR(50),
    password VARCHAR(100),
    status   VARCHAR(50) Default '0',
    registerdate VARCHAR(255),
    updatedate VARCHAR(255),
    PRIMARY KEY(id)
    
    )"); 
    if($createtable)
    {
        //check all input filled
        if(!empty($fname) AND !empty($email) AND !empty($phone) AND !empty($password) AND !empty($username))
     {
         //check email
         if(filter_var($email,FILTER_VALIDATE_EMAIL))
         {
             $chkemail = $db->query("SELECT * FROM users WHERE email='$email'");
             if($chkemail->num_rows == 0)
             {
                 $store = $db->query("INSERT INTO users(unique_id,username,fullname,email,phone,password,registerdate,updatedate)VALUES('{$unique_id}','{$username}','{$fname}','{$email}','{$phone}','{$password}','{$date}','{$date}')");
                 if($store)
                 {
                    mkdir("../users/".$unique_id);
                    $msg = array("status"=>"200","msg"=>"success","path"=>"login.php");
                    echo json_encode($msg);
                 }
                 else
                 {
                     echo "data not stored";
                 }
             }
             else
             {
                 $msg = array("status"=>"false","msg"=>"email allready exit");
                 echo json_encode($msg);
             }
         }
         else
         {
            $msg = array("status"=>"false","msg"=>"Please Filled Valid Email");
            echo json_encode($msg);
         }
     }
     else
     {
        $msg = array("status"=>"false","msg"=>"Please Filled All Input");
        echo json_encode($msg);
     }
    } 
    else
    {
        echo "tabel not created";
    }
}
?>
