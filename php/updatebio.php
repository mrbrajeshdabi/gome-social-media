<?php

require("db.php");
class Update{
    public $data;
    
    function __construct($data)
    {
        $this->bio = $data;
    }
    function getdata()
    {
        global $db;
        $unique_id = $_COOKIE['_aut_ui_'];
        $d = $this->bio;
        $bio = $d['bio'];
        $sql = $db->query("UPDATE users SET bio='{$bio}' WHERE unique_id='{$unique_id}'");
        //return $sql;
        if($sql)
        {
            return json_encode(['status'=>"true","msg"=>"update success"]);
        }
        else
        {
            return json_encode(['status'=>"false","msg"=>"not updateded"]);
        }
    }
}
$obj = new Update($_POST);
echo $obj->getdata();




?>