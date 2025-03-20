<?php
        
        $db = new mysqli("localhost","root","","socialnet");
        if($db->connect_error)
        {
            die("please check your database server for xampp");
        }

?>