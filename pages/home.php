<?php
require("../php/db.php");
$unique_id = $_COOKIE['_aut_ui_'];
$sql = $db->query("SELECT * FROM post LEFT JOIN users ON post.post_unique_id=users.unique_id ORDER BY post_id DESC LIMIT 20 ");
?>
<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
   <div class="row p-0 m-0">
   <audio class="audios"></audio>
    <div class="col-md-3 p-0 m-0">
    </div>
    <div class="col-md-6 p-0 m-0">
        <?php
        //
        if($sql->num_rows !=0)
        {
            while($data = $sql->fetch_assoc())
            {
                echo '
                
                <center>
                <div class="publicpostbox border">
                        <div class="publicuserdettail d-flex">
                            <img src='.$data['profilepic'].' id="postimg" class="ms-3 mt-2">
                            <p class="username ms-5 mt-3">'.$data['username'].'</p>
                        </div>
                        <div class="userpostpic" url="'.$data['post_song'].'">
                            <img src="users/'.$data['post_unique_id'].'/'.$data['post_pic'].'" class="postimg2">
                        </div>
                        <div class="publictools d-flex mb-3 mt-3">
                        <i class="fa fa-thumbs-up likeorunlikebtn fs-3 text-light" type="like" pid='.$data['post_id'].'     id="likebtn_'.$data['post_id'].'">'.$data['post_like'].'</i>
                        <i class="fa fa-thumbs-down likeorunlikebtn fs-3 text-light" type="unlike" pid='.$data['post_id'].' id="dislikebtn_'.$data['post_id'].'">'.$data['post_unlike'].'</i>
                        <i class="fa fa-comment commentbtn fs-3 text-light"></i>
                      </div>
                        <div class="publicpoststatus p-0 m-0 border">
                            
                            <p>'.$data['post_status'].'</p>
                            
                        </div>
                    </div>
                </center>';
            }
        }
        else
        {
            echo "no post";
        }
        
        ?>
       
    </div>
    <div class="col-md-3 p-0 m-0"></div>
   </div>
   <script src="js/ajax.js"></script>
</body>
</html>
