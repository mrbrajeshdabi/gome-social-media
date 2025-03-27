<?php
require("db.php");
if(isset($_POST["type"]) && $_POST['type'] != "" && isset($_POST["id"]) && $_POST['id'] != "")
{
    $type = mysqli_real_escape_string($db,$_POST['type']);
    $id = mysqli_real_escape_string($db,$_POST['id']);
    
    if($type == "like")
    {
        if(isset($_COOKIE['like_'.$id]))
        {
            setcookie("like_".$id,"yeslike",1,"/");
            $sql = $db->query("UPDATE post SET post_like=post_like-1 WHERE post_id='{$id}'");
            if($sql)
            {
                $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                $msg = json_encode(["operation"=>"like","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                echo $msg;
            }  
        }
        else
        {
            if(isset($_COOKIE['dislike_'.$id]))
            {
                setcookie("dislike_".$id,"yeslike",1,"/");
                setcookie("like_".$id,"yeslike",time()+60*60*24*365*5,"/");
                $sql = $db->query("UPDATE post SET post_like=post_like+1 , post_unlike=post_unlike-1 WHERE post_id='{$id}'");
                if($sql)
                {
                    $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                    $msg = json_encode(["operation"=>"like","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                    echo $msg;
                }
            }
            else
            {
                setcookie("like_".$id,"yeslike",time()+60*60*24*365*5,"/");
                $sql = $db->query("UPDATE post SET post_like=post_like+1 WHERE post_id='{$id}'");
                if($sql)
                {
                    $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                    $msg = json_encode(["operation"=>"like","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                    echo $msg;
                }
            }
        }

    }
    else
    {
        if(isset($_COOKIE['dislike_'.$id]))
        {
            setcookie("dislike_".$id,"yesdislike",1,"/");
                $sql = $db->query("UPDATE post SET post_unlike=post_unlike-1 WHERE post_id='{$id}'");
                if($sql)
                {
                    $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                    $msg = json_encode(["operation"=>"dislike","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                    echo $msg;
                }
        }
        else
        {
            if(isset($_COOKIE['like_'.$id]))
            {
                setcookie("like_".$id,"yeslike",1,"/");
                setcookie("dislike_".$id,"yesdislike",time()+60*60*24*365*5,"/");
                $sql = $db->query("UPDATE post SET post_like=post_like-1 , post_unlike=post_unlike+1 WHERE post_id='{$id}'");
                $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                $msg = json_encode(["operation"=>"dislike","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                echo $msg;
            }
           else
           {
            setcookie("dislike_".$id,"yesdislike",time()+60*60*24*365*5,"/");
            $sql = $db->query("UPDATE post SET post_unlike=post_unlike+1 WHERE post_id='{$id}'");
            if($sql)
            {
                $likecount = mysqli_fetch_assoc($db->query("SELECT * FROM post WHERE post_id='{$id}'"));
                $msg = json_encode(["operation"=>"dislike","user_id"=>$id,"likecount"=>$likecount['post_like'],"unlikecount"=>$likecount['post_unlike']]);
                echo $msg;
            }
           }
        }
    }
    
}


?>