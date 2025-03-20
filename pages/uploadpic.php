<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
<link rel="stylesheet" href="css/uploadpic.css">
<!-- <div class="tools d-flex p-5">
      <button id="posts" class="me-5 btn-danger">Post</button>
      <button id="reels" class="ms-5">Reel</button>
    </div>--->

  <div class="leftbox"></div>
    <form class="upload_frm">
      <div class="posts">
        <div class="picbox">
          <img id="upload_img" accept="image/*">
        <input type="file" accept="image/*" name="uploadpic" id="uploadpic">
        <i class="fa fa-file-photo-o" id="uploadicon"></i>
      </div>
      <textarea name="picstatus" id="picstatus" cols="47" rows="4" placeholder="Type Any Text.."></textarea>
      <div class="songtool">
        <i class="fa fa-plus-circle" id="musicaddicon" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
        <input type="text" id="uploadsong" name="uploadsong">
       <audio controls id="audio"></audio>
      </div>
      <center>
        <button class="btn btn-warning mb-3 disabled" type="submit" id="uploadbtn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
      </center>
      </div>
      </form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Go Music</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php

          require("../php/db.php");
          $sql = $db->query("SELECT * FROM songs");
          if($sql->num_rows !=0)
          {
              while($data= $sql->fetch_assoc())
              {
                echo '
                
                <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-play ms-3 text-dark songplaybtn" url='.$data['songurl'].'></i><i class="fa fa-plus-circle ms-2 text-dark songaddbtn" url='.$data['songurl'].'></i><span class="ms-5">'.$data['songname'].'</span></li>
                </ul>
                
                ';
              }
          }
          else
          {
            echo "no song";
          }

        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="save">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </div>
      </div>
      </div>
    </div>  
  <audio id="playaudio"></audio>
<script src="js/ajax.js"></script>
</body>
</html>
