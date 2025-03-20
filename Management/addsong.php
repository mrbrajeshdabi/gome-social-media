<?php
require("../php/db.php");
$songname = mysqli_real_escape_string($db,$_POST['songname']);
$songurl = mysqli_real_escape_string($db,$_POST['songurl']);
$apikey = md5("Papakipari123@@",false);
//check table
$chktable = $db->query("SELECT * FROM songs");
if($chktable)
{
      $storeData = $db->query("INSERT INTO songs(songname,songurl,apikey)VALUES('{$songname}','{$songurl}','{$apikey}')");
      if($storeData)
      {
        $msg = json_encode(["status"=>true,"msg"=>"success"]);
        echo $msg;
      }
}
else
{
  $createTable = $db->query("CREATE TABLE songs(
    id INT(11) NOT NULL AUTO_INCREMENT,
    songname VARCHAR(50),
    songurl VARCHAR(200),
    apikey VARCHAR(50),
    PRIMARY KEY(id)
    )");
    if($createTable)
    {
      $storeData = $db->query("INSERT INTO songs(songname,songurl,apikey)VALUES('{$songname}','{$songurl}','{$apikey}')");
      if($storeData)
      {
        $msg = json_encode(["status"=>true,"msg"=>"success"]);
        echo $msg;
      }
    }
    else
    {
      $msg = json_encode(["status"=>false,"msg"=>"Table Not Create"]);
      echo $msg;
    }
}


?>