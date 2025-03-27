<?php
require("db.php");
$msg = "";
$unique_id = $_COOKIE['_aut_ui_'];
$pic = $_POST['pic'];
$sql = $db->query("UPDATE users SET profilepic='{$pic}' WHERE unique_id='{$unique_id}'");
if($sql)
{
    $msg = array("status"=>"200","msg"=>"success","path"=>"profile.php");
    echo json_encode($msg);
}
else
{
    $msg = array("status"=>"false","msg"=>"not success","path"=>"no");
    echo json_encode($msg);
}


?>