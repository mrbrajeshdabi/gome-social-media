<?php
require("db.php");
if(isset($_POST['type']) && $_POST['type'] != '' && isset($_POST['unique_id']) && $_POST['unique_id'] > 0)
{
    $type = mysqli_real_escape_string($db,$_POST['type']);
    $id = mysqli_real_escape_string($db,$_POST['unique_id']);
    $sql = $db->query("SELECT * FROM post WHERE post_unique_id='{$id}'");
    $data = $sql->fetch_assoc();
   if($type == "like")
   {
        if(isset($_COOKIE['like_'.$id]))
        {
            setcookie("like_".$id,"yes",1);
            $update =$db->query("UPDATE post SET post_like=post_like-1 WHERE post_unique_id='{$id}'");
            if($update)
            {
                $oparation = "like_";
                $msg = array("oparation"=>$oparation,"unique_id"=>$id,"like"=>$data['post_like'],"unlike"=>$data['post_unlike']);
                echo json_encode($msg);  $oparation = "like_";
                
            }
        }
        else
        {
            if(isset($_COOKIE['unlike_'.$id]))
            {
                setcookie("unlike_".$id,"yes",1);
                $update =$db->query("UPDATE post SET post_unlike=post_unlike-1 WHERE post_unique_id='{$id}'");
            }
            setcookie("like_".$id,"yes",time()+60*60*24*365*5);
            $update =$db->query("UPDATE post SET post_like=post_like+1 WHERE post_unique_id='{$id}'");
            if($update)
            {
                $oparation = "like";
                $msg = array("oparation"=>$oparation,"unique_id"=>$id,"like"=>$data['post_like'],"unlike"=>$data['post_unlike']);
                echo json_encode($msg);
            }
        }

    }
   if($type == "unlike")
   {
    if(isset($_COOKIE['unlike_'.$id]))
    {
        setcookie("unlike_".$id,"yes",1);
        $update =$db->query("UPDATE post SET post_unlike=post_unlike-1 WHERE post_unique_id='{$id}'");
        $oparation = "unlike_";
        $msg = array("oparation"=>$oparation,"unique_id"=>$id,"like"=>$data['post_like'],"unlike"=>$data['post_unlike']);
        echo json_encode($msg);
    }
    else
    {
        if(isset($_COOKIE['like_'.$id]))
        {
            setcookie("like_".$id,"yes",1);
            $update =$db->query("UPDATE post SET post_like=post_like-1 WHERE post_unique_id='{$id}'");
        }
        setcookie("unlike_".$id,"yes",time()+60*60*24*365*5);
        $update =$db->query("UPDATE post SET post_unlike=post_like+1 WHERE post_unique_id='{$id}'");
        $oparation = "unlike";
        $msg = array("oparation"=>$oparation,"unique_id"=>$id,"like"=>$data['post_like'],"unlike"=>$data['post_unlike']);
        echo json_encode($msg);
       

    }
   }
}
else
{
    $msg = array("status"=>"false","msg"=>"please choose one");
    echo json_encode($msg);
}


?>