<?php
require("db.php");
//print_r($_FILES);
//print_r($_POST);
$unique_id = $_COOKIE['_aut_ui_'];
/*$sql= $db->query("SELECT * FROM users WHERE unique_id='{$unique_id}'");
$data = $sql->fetch_assoc();
$data['']*/
$postpic = $_FILES['uploadpic'];
$picname = $postpic['name'];
$piclocation = $postpic['tmp_name'];
$picsize = $postpic['size'];
$pictype = $postpic['type']; 
$poststatus = mysqli_real_escape_string($db,$_POST['status']);
$post_song = mysqli_real_escape_string($db,$_POST['songurl']);
$postdate = date("Y-m-d");
//checktable
$chktable = $db->query("SELECT * FROM post");
if($chktable)
{
            if(file_exists("../users/".$unique_id."/".$picname))
            {
                $msg = array("status"=>"false","msg"=>"File Allready Exit","path"=>"no");
                echo json_encode($msg);
                
            }
            else
            {
                if(move_uploaded_file($piclocation,"../users/".$unique_id."/".$picname))
                {
                    $store = $db->query("INSERT INTO post(post_unique_id,post_pic,post_status,post_song,post_date)VALUES('{$unique_id}','{$picname}','{$poststatus}','{$post_song}','{$postdate}')");
                    if($store)
                    {
                        $msg = array("status"=>"200","msg"=>"post_success","path"=>"#home");
                        echo json_encode($msg);
                    }
                    else
                    {
                        $msg = array("status"=>"false","msg"=>$post,"path"=>"no");
                        echo json_encode($msg);
                    }
                }
                else
                {
                    $msg = array("status"=>"false","msg"=>"File Not Send","path"=>"no");
                    echo json_encode($msg);
                }
            }
}
else
{
    $createtable = $db->query("CREATE TABLE post(
    
    post_id int(11) not null auto_increment,
    post_unique_id int(11),
    post_pic VARCHAR(100),
    post_status TEXT(100),
    post_like int(11) Default 0,
    post_unlike int(11) Default 0,
    post_song TEXT(255),
    post_date varchar(50),
    primary key(post_id)
    )");
    if($createtable)
    {
        if(file_exists("../users/".$unique_id."/".$picname))
            {
                $msg = array("status"=>"false","msg"=>"File Allready Exit","path"=>"no");
                echo json_encode($msg);
                
            }
            else
            {
                if(move_uploaded_file($piclocation,"../users/".$unique_id."/".$picname))
                {
                    $store = $db->query("INSERT INTO post(post_unique_id,post_pic,post_status,post_song,post_date)VALUES('{$unique_id}','{$picname}','{$poststatus}','{$post_song}','{$postdate}')");
                    if($store)
                    {
                        $msg = array("status"=>"200","msg"=>"post_success","path"=>"#home");
                        echo json_encode($msg);
                    }
                    else
                    {
                        $msg = array("status"=>"false","msg"=>$post,"path"=>"no");
                        echo json_encode($msg);
                    }
                }
                else
                {
                    $msg = array("status"=>"false","msg"=>"File Not Send","path"=>"no");
                    echo json_encode($msg);
                }
            }
    }
}

?>