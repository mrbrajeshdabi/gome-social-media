<?php
require("db.php");
$id = $_POST['id']; 
$uid = $_POST['uid'];
$muid = $_COOKIE['_aut_ui_'];
$msg = $_POST['msg'];
if($_POST['msg'] == "accept")
{
    $sql = $db->query("UPDATE requestfrd SET requestmsg='{$msg}' WHERE id='{$id}'");
    if($sql)
    {
        setcookie("acceptfrd_".$uid,$uid,time()+60*60*24*365*10,"/");
        $msgs = array("status"=>"200","msg"=>"Friends Request Accept","userid"=>$uid);
        echo json_encode($msgs);
    }
    else
    {
        $msgs = array("status"=>"false","msg"=>"not update");
        echo json_encode($msgs);
    }
}
else if($_POST['msg'] == "cancel")
{
   $chkreq = $db->query("SELECT * FROM requestfrd WHERE sendrequestid='{$uid}' AND receiverequestid='{$muid}'");
    if($chkreq->num_rows !=0)
    {
        $sql2 = $db->query("DELETE FROM requestfrd WHERE id='{$id}'");
        if($sql2)
        {
            //setcookie("frd_request".$muid,"",time()-(60*60*24*365*10),"/");
            $msgs = array("status"=>"200","msg"=>"Friends Request Cancel");
            echo json_encode($msgs);
        }
        else
        {
            $msgs = array("status"=>"false","msg"=>"not update");
            echo json_encode($msgs);
        }   
    }
}

?>