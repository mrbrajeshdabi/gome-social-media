<?php
require("db.php");
$unique_id = $_COOKIE["_aut_ui_"];
$sql = $db->query("SELECT * FROM users WHERE unique_id='{$unique_id}'");
if($sql->num_rows != 0)
{
   while($data=$sql->fetch_assoc())
   {
    $msg = json_encode(["status"=>true,"msg"=>["fullname"=>$data["fullname"],"username"=>$data["username"],"email"=>$data["email"],"phone"=>$data["phone"]]]);
   }
}
else
{
  $msg = json_encode(["status"=>false, "msg"=>"Data Not Availlable"]);
}

echo $msg;

?>