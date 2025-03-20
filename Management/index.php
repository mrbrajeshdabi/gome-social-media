<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:rgba(0,0,0,0.5); padding:0; margin:0; background-attachment:fixed;">
<div class="row p-0 m-0">
  <div class="col-md-3 p-0 m-0"></div>
  <div class="col-md-6 p-0 m-0">
    <div class="leftbox"></div>
    <form class="add_songs_frm">
      <center><h1>Add Song</h1></center>
      <div class="form-group">
        <label for="songname">Song Name</label>
        <input type="text" id="songname" name="songname">
      </div>
      <div class="form-group">
        <label for="songurl">Song Url</label>
        <input type="text" id="songurl" name="songurl">
      </div>
      <center><button class=" addsongbtn" type="submit">Add Song</button></center>
    </form>
  </div>
  <div class="col-md-3 p-0 m-0"></div>
</div>
  
</body>
</html>
<script>
  
$(document).ready(function(){
  $(".add_songs_frm").submit(function(e){
    e.preventDefault();
    $.ajax({
      type:"POST",
      url:"addsong.php",
      data:new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      beforeSend:function()
      {

      },
      success:function(response)
      {
        console.log(response);
      }
    })
  })
})

</script>