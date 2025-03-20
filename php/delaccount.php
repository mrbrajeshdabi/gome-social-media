<?php

require("db.php");

function del()
{
  global $db;
  $unique_id = $_COOKIE['_aut_ui_'];
  
    if(rmdir("../users/$unique_id/"))
    {
        $del = $db->query("DELETE FROM users WHERE unique_id='{$unique_id}'");
        if($del)
        {
        $postcheck = $db->query("DELETE FROM post WHERE post_unique_id='{$unique_id}'");
        if($postcheck)
        {
            if(setcookie("_aut_ui_","",time()-(60*60*24),"/"))
            {
                header("Location:../login.php");
            }
            else
            {
                echo json_encode(["status"=>false,"msg"=>"Cookie Not Delete"]);
            }
        }
        else
        {
            echo json_encode(["status"=>false,"msg"=>"users Post Not Delete"]);
        }
       }
    }
    

}

del();


?>