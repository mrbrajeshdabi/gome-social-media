 <!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
 <div class="row p-0 m-0">
   <div class="col-md-3 p-0 m-0"></div>
   <div class="col-md-6 p-0 m-0 ppp">
    <form class="uploadpic_frm">
    <div class="uploadpicbox">
      <img src="images/background.jpg" alt="" class="w-100">
    </div>
    <input type="file" accept="image/*" name="uploapic" class="uploapic">
    <textarea name="status" class="status" cols="40" rows="5"></textarea>
    <button class="btn btn-primary picuploadbtn">Upload Now</button>
    </form>
    <div>
   <div class="col-md-3 p-0 m-0"></div>
 <button class="uploadpostmodalbtn d-none" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closebtn"></button>
      </div>
      <div class="modal-body">
        <p class="uploadmsg"></p>
      </div>
     
    </div>
  </div>
</div>
 <script src="js/ajax.js"></script>
</body>
</html>