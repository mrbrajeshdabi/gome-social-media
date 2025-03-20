<?php
require("db.php");
if(!empty(isset($_POST['type'])) AND !empty(isset($_POST['id'])))
{
    $unique_id = $_COOKIE['_aut_ui_'];
    $type = mysqli_real_escape_string($db,$_POST['type']);
    $id = mysqli_real_escape_string($db,$_POST['id']);
    $sql = $db->query("SELECT * FROM post WHERE post_unique_id='{$unique_id}' AND post_id='{$id}'");
    $data = $sql->fetch_assoc();
    $filename = $data['post_pic'];
    if($_POST['type'] == "delete")
    {
        if(unlink("../users/".$unique_id."/".$filename))
        {
            $del = $db->query("DELETE FROM post WHERE post_id='{$id}'");
            if($del)
            {
              $msg = json_encode(['status'=>200,'msg'=>'delete']);
            }
            else
            {
             $msg = json_encode(['status'=>'false','msg'=>'anything wrong']);
            }
        }
        else
        {
            $msg = json_encode(['status'=>'false','msg'=>'post pic not delete']);
        }
    }
    elseif($_POST['type'] == "update")
    {
        $msg = json_encode(['status'=>200,'msg'=>'update']);
      
    }
}
else
{
    $msg = json_encode(['status'=>'false','msg'=>'Your Are Very Smart Bro']);
    
}

print_r($msg)

?>