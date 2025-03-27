<?php
require("db.php");
$date= Date("Y-m-d");
function updateinfo($data)
{
    global $db;
    global $date;
    $unique_id = $_COOKIE['_aut_ui_'];
    $sql = $db->query("UPDATE users SET username='{$data['uname']}',fullname='{$data['fname']}',phone='{$data['phone']}',updatedate='{$date}' WHERE unique_id='{$unique_id}'");
    if($sql)
    {
        echo json_encode(['status'=>true,"msg"=>"success"]);
    }
    else
    {
        echo json_encode(['status'=>false,"msg"=>"wrong"]);
    }
}

updateinfo($_POST);

?>