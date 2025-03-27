<?php
require("db.php");
$unique_id = $_COOKIE["_aut_ui_"];
$currentpass = mysqli_real_escape_string($db,$_POST["currentpass"]);
$newpass = mysqli_real_escape_string($db,$_POST["newpass"]);
$confirmpass = mysqli_real_escape_string($db,$_POST["confirmpass"]);
//check input filled empty
if(!empty($currentpass) || !empty($newpass) || !empty($confirmpass))
{
  //check currentpass write pass
  $sql = $db->query("SELECT * FROM users WHERE unique_id='{$unique_id}' AND password='{$currentpass}'");
  if($sql->num_rows != 0)
  {
    //check newpass and confirmpass
    if($newpass == $confirmpass)
    {
      $update = $db->query("UPDATE users SET password='{$newpass}' WHERE unique_id='{$unique_id}'");
      if($update)
      {
        $msg = json_encode(["status"=>true,"msg"=>"Password Update success"]);
      }
      else
      {
        $msg = json_encode(["status"=>false,"msg"=>"Password Not Update Try Sometime Later"]);
      }
    }
    else
    {
      $msg = json_encode(["status"=>false,"msg"=>"Password Does Not Match"]);
    }
  }
  else
  {
    $msg = json_encode(["status"=>false,"msg"=>"Wrong Password"]);
  }
}
else
{
  $msg = json_encode(["status"=>false,"msg"=>"Please Filled All Input"]);
}

echo $msg;

?>