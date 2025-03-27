<?php
$msg ="";
require("db.php");
$receiverequest =mysqli_real_escape_string($db,$_POST['receiverequest']);
$sendrequest = mysqli_real_escape_string($db,$_POST['sendrequest']);
$type = mysqli_real_escape_string($db,$_POST['type']);

//check table
$chktable = $db->query("SELECT * FROM requestfrd");
if($chktable)
{
        if($type == "request_send")
        {
            $chkallfrd = $db->query("SELECT * FROM requestfrd WHERE (sendrequestid='{$sendrequest}' AND receiverequestid='{$receiverequest}') OR sendrequestid='{$receiverequest}' AND receiverequestid='{$sendrequest}'");
           if($chkallfrd->num_rows !=1)
           {
                $store = $db->query("INSERT INTO requestfrd(sendrequestid,receiverequestid,requestmsg)VALUES('{$sendrequest}','{$receiverequest}','{$type}')");
                if($store)
                {
                    $time = time()+(60*60*24*2);
                    setcookie("frd_request".$receiverequest,$receiverequest,$time,"/");
                    $msg = array("status"=>"200","msg"=>"send","type"=>"request_unsend");
                    echo json_encode($msg);
                }
                else
                {
                    $msg = array("status"=>"false","msg"=>"Data Not Inserted");
                    echo json_encode($msg); 
                }
           }
           else
           {
            $accept = "accept";
            $allreadyfrd = $db->query("SELECT * FROM requestfrd WHERE (sendrequestid='{$sendrequest}' AND receiverequestid='{$receiverequest}' AND requestmsg='{$accept}') OR sendrequestid='{$receiverequest}' AND receiverequestid='{$sendrequest}' AND requestmsg='{$accept}'");
            if($allreadyfrd->num_rows ==1)
            {
                $msg = array("status"=>"false","msg"=>"Allready Friends");
                echo json_encode($msg); 
            }
            else
            {
                $msg = array("status"=>"false","msg"=>"Allready Send Request");
                echo json_encode($msg); 
            }
           }
        }
        else if($type == "request_unsend")
        {
            $update = $db->query("DELETE FROM requestfrd WHERE sendrequestid='{$sendrequest}'");
            if($update)
            {
                setcookie("frd_request".$receiverequest,"",time()-(60*60*24*2),"/");
                $msg = array("status"=>"200","msg"=>"unsend","type"=>"request_send");
                echo json_encode($msg);
            }
            else
            {
                $msg = array("status"=>"false","msg"=>"Not Updated Unsend");
                echo json_encode($msg); 
            }
        }
        else if($type == "request_unfriend")
        {
            $update = $db->query("DELETE FROM requestfrd WHERE sendrequestid='{$receiverequest}'");
            if($update)
            {
                setcookie("frd_request".$receiverequest,"",time()-(60*60*24*365*10),"/");
                setcookie("acceptfrd_".$receiverequest,"",time()-60*60*24*365*10,"/");
                $msg = array("status"=>"200","msg"=>"unfriend","type"=>"request_send");
                echo json_encode($msg);
            }
            else
            {
                $msg = array("status"=>"false","msg"=>"Not Updated Unsend");
                echo json_encode($msg); 
            }
        }
        
}
else
{
 $createtable = $db->query("CREATE TABLE requestfrd(
 
    id  INT(255) NOT NULL AUTO_INCREMENT,
    sendrequestid INT(255),
    receiverequestid INT(255),
    requestmsg VARCHAR(255),
    PRIMARY KEY(id)
 )");

 if($createtable)
 {
    if($type == "request_send")
    {
        $chkallfrd = $db->query("SELECT * FROM requestfrd WHERE (sendrequestid='{$sendrequest}' AND receiverequestid='{$receiverequest}') OR sendrequestid='{$receiverequest}' AND receiverequestid='{$sendrequest}'");
       if($chkallfrd->num_rows !=1)
       {
            $store = $db->query("INSERT INTO requestfrd(sendrequestid,receiverequestid,requestmsg)VALUES('{$sendrequest}','{$receiverequest}','{$type}')");
            if($store)
            {
                $time = time()+(60*60*24*2);
                setcookie("frd_request".$receiverequest,$receiverequest,$time,"/");
                $msg = array("status"=>"200","msg"=>"send","type"=>"request_unsend");
                echo json_encode($msg);
            }
            else
            {
                $msg = array("status"=>"false","msg"=>"Data Not Inserted");
                echo json_encode($msg); 
            }
       }
       else
       {
        $accept = "accept";
        $allreadyfrd = $db->query("SELECT * FROM requestfrd WHERE (sendrequestid='{$sendrequest}' AND receiverequestid='{$receiverequest}' AND requestmsg='{$accept}') OR sendrequestid='{$receiverequest}' AND receiverequestid='{$sendrequest}' AND requestmsg='{$accept}'");
        if($allreadyfrd->num_rows ==1)
        {
            $msg = array("status"=>"false","msg"=>"Allready Friends");
            echo json_encode($msg); 
        }
        else
        {
            $msg = array("status"=>"false","msg"=>"Allready Send Request");
            echo json_encode($msg); 
        }
       }
    }
    else if($type == "request_unsend")
    {
        $update = $db->query("DELETE FROM requestfrd WHERE sendrequestid='{$sendrequest}'");
        if($update)
        {
            setcookie("frd_request".$receiverequest,"",time()-(60*60*24*2),"/");
            $msg = array("status"=>"200","msg"=>"unsend","type"=>"request_send");
            echo json_encode($msg);
        }
        else
        {
            $msg = array("status"=>"false","msg"=>"Not Updated Unsend");
            echo json_encode($msg); 
        }
    }
    else if($type == "request_unfriend")
    {
        $update = $db->query("DELETE FROM requestfrd WHERE sendrequestid='{$receiverequest}'");
        if($update)
        {
            setcookie("frd_request".$receiverequest,"",time()-(60*60*24*365*10),"/");
            setcookie("acceptfrd_".$receiverequest,"",time()-60*60*24*365*10,"/");
            $msg = array("status"=>"200","msg"=>"unfriend","type"=>"request_send");
            echo json_encode($msg);
        }
        else
        {
            $msg = array("status"=>"false","msg"=>"Not Updated Unsend");
            echo json_encode($msg); 
        }
    }
 }
 else
 {
    $msg = array("status"=>"false","msg"=>"Table Not Created");
    echo json_encode($msg);
 }
}

?>
