<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
<link rel="stylesheet" href="css/uploadpic.css">
<div class="row p-0 m-0">
  <div class="col-md-1 p-0 m-0"></div>
  <div class="col-md-4 p-2 m-0 border uploadshowpic mt-2 d-none">
  <img src="images/dr.jpg" alt="" class="uploadpicnew">
  </div>
  <div class="col-md-1 p-0 m-0"></div>
  <div class="col-md-5 p-2 m-0 mt-2 border">
    <form class="uploadpicfrm ">
      <div class="form-group">
        <label for="uploadpic">Upload Pic</label>
        <input type="file" class="form-control" id="uploadpic" name="uploadpic" accept="image/*">
      </div>
      <div class="form-group">
      <label for="status">Enter Status</label>
        <textarea name="status" id="status" cols="20" rows="7" class="form-control"></textarea>
      </div>
      <div class="d-flex">
      <button class="btn btn-outline-warning mt-3 ms-1 addsongbtn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa fa-plus-circle fs-1"></i></button>
      <input type="hidden" id="songurl" name="songurl">
      </div>
      <button class="btn btn-light mt-3 uploadpostbtn w-100 mb-3" type="submit"><i class="fa fa-telegram fs-1"></i></button>
    </form>
  </div>
  <div class="col-md-1 p-0 m-0"></div>

</div>


<script src="js/ajax.js"></script>

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
    <audio></audio>
</body>
</html>
