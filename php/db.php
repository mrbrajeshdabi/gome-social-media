<?php
        
        //$db = new mysqli("sql309.infinityfree.com","if0_38377585","M7S4qdh9Dd3lS","if0_38377585_socialnet");
        $db = new mysqli("localhost","root","","socialnet");
        if($db->connect_error)
        {
            die("please check your database server for xampp");
        }

?>