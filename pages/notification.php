<?php
require("../php/db.php");
?>
<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
<div class="row p-0 m-0">
    <center><h1>Notification</h1></center>
    <div class="col-md-3 p-0 m-0"></div>
    <div class="col-md-6 p-0 m-0">
        <div class="card" id="card">
          <div class="card-header text-danger">
            <h1>Notification</h1>
          </div>
          <div class="card-body">
          <table class="text-light" id="table">

              <?php 
                  //$sql2 = $db->query("SELECT * FROM requests");
                  //$request_id = $data2['request_id'];
                  $unique_id = $_COOKIE['_aut_ui_'];
                  $sql = $db->query("SELECT * FROM requestfrd");
                  if($sql->num_rows !=0)
                  {
                      while($data=$sql->fetch_assoc())
                      {
                          $user_u_id = $data['sendrequestid'];
                          $sql2 = $db->query("SELECT * FROM users WHERE unique_id='{$user_u_id}'");
                          $d = $sql2->fetch_assoc();
            
                          if($data['receiverequestid'] == $unique_id AND $data['requestmsg'] == "request_send")
                          {
                              echo  '
                                      <tr class="out">
                                      <td><h4>'.$d['username'].'</h4></td>
                                      <td class="accept"><button class="btn btn-success rubtn" pid="'.$data['id'].'" uuid='.$data['sendrequestid'].' msg="accept"><i class="fa fa-check-circle"></i></button></td>
                                      <td class="cancel"><button class="btn btn-danger rubtn " pid="'.$data['id'].'" uuid='.$data['sendrequestid'].' msg="cancel"><i class="fa fa-times-circle"></i></button></td>
                                      </tr>
                              
                              ';
                          }
                          if($data['receiverequestid'] == $unique_id AND $data['requestmsg'] == "accept")
                          {
                              echo  '
                                      <tr class="out">
                                    
                                      <td><h4>'.$d['username'].'</h4></td>
                                      <td class="ms-5"><p class="ms-5 mt-3">Friends request accept</p></td>
                                      </tr>
                              
                              ';
                          }
                          if($data['receiverequestid'] == $unique_id AND $data['requestmsg'] == "cancel")
                          {
                              echo '
                                      <tr class="out">
                                    
                                      <td class="ms-5"><h4>'.$d['username'].'</h4></td>
                                      <td class="ms-5"><p class="ms-5 mt-3">Friends request cancel</p></td>
                                      </tr>
                              
                              ';
                          }
                      
                      }
                    
                      
                  }
                  else
                  {
                      echo "No Notification";
                  }
                  
                  ?>

              </table>
          </div>
         
        </div>
    </div>
    <div class="col-md-3 p-0 m-0"></div>
</div>

<script src="js/ajax.js"></script>
</body>
</html>
