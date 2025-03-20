<?php
require("db.php");
$msg ="";
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$password = mysqli_real_escape_string($db,$_POST['password']);
if(!empty($phone) AND !empty($password))
{
    //check phone
    $chkphone = $db->query("SELECT * FROM users WHERE phone='{$phone}'");
    if($chkphone->num_rows !=0)
    {
        //check login
        $login = $db->query("SELECT * FROM users WHERE phone= '{$phone}' AND password= '{$password}'");
        if($login->num_rows !=0)
        {
            $sql = $db->query("SELECT * FROM users WHERE phone='{$phone}'");
            $data = $sql->fetch_assoc();
            $unique_id = $data['unique_id'];
            $time = time()+(60*60*24);
            setcookie("_aut_ui_",$unique_id,$time,"/");
            $msg = array("status"=>"200","msg"=>"success","path"=>"pic.php");
            echo json_encode($msg);
        }
        else
        {
            $msg = array("status"=>"false","msg"=>"Wrong Password","path"=>"no");
            echo json_encode($msg);
        }
    }
    else
    {
        $msg = array("status"=>"false","msg"=>"Mobile Number Not Found","path"=>"no");
        echo json_encode($msg);
    }
}
else
{
 $msg = array("status"=>"false","msg"=>"Please Filled All Value","path"=>"no");
 echo json_encode($msg);
}

?>