<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GOME</span>
  </div>
</nav>
<div class="row p-0 m-0">
    <div class="col-md-3 p-0 m-0"></div>
    <div class="col-md-6 p-0 m-0">
        <div class="card" id="card">
            <!--- <div class="card-header bg-dark" id="card">
                 <form class="search_frd">
                    <div class="form-group d-flex">
                        <input type="search" class="form-control" id="search" name="search" placeholder="Search Friends" disabled>
                        <i class="fa fa-search search w-50"></i>
                        <button class="btn btn-light w-50 ms-3" type="button" disabled>Search</button>
                    </div>
                </form>
            </div>--->
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table">
                    <!--<thead class="text-center">
                    <tr>
                        <td>Profilepic</td>
                        <td>Username</td>
                        <td>Request</td>
                    </tr>
                    </thead>-->
                    <tbody>
                        <?php
                        require("../php/db.php");
                        $unique_id = $_COOKIE['_aut_ui_'];
                        
                        $sql= $db->query("SELECT * FROM users"); //LEFT JOIN requestfrd ON requestfrd.receiverequestid = users.unique_id");            
                       if($sql->num_rows !=0)
                       {
                            while($data=$sql->fetch_assoc())
                            { 
                                if($data['unique_id'] != $_COOKIE['_aut_ui_'])
                                {
                                    if($data['profilepic'] == "NULL")
                                    {
                                        echo "<tr>
                                            <td id='td'><center><i class='fa fa-user-circle'></i></center></td>
                                            <td id='td'><center>".$data['username']."</center></td>
                                            <td id='td'><center><i class='fa fa-user-plus requestbtn text-dark' aria-hidden='true' rid=".$data['unique_id']." sid=".$_COOKIE['_aut_ui_']." id=btnid_".$data['id']." type='request_send'></i></center></td>
                                            </tr>"; 
                                    }
                                    else{
                                        
                                        if(isset($_COOKIE['frd_request'.$data['unique_id']]) == $data['unique_id'])
                                        {

                                            echo "<tr>
                                                <td id='td'><center><img src=".$data["profilepic"]." class='img'></center></td>
                                                <td id='td'><center>".$data['username']."</center></td>
                                                <td id='td'><center><i class='fa fa-telegram requestbtn text-success' aria-hidden='true' rid=".$data['unique_id']." sid=".$_COOKIE['_aut_ui_']." id=btnid_".$data['id']." type='request_unsend'></i></center></td>
                                                </tr>";
                                        }
                                        elseif(isset($_COOKIE['acceptfrd_'.$data['unique_id']]) == $data['unique_id'])
                                        {
                                            echo "<tr>
                                                <td id='td'><center><img src=".$data["profilepic"]." class='img'></center></td>
                                                <td id='td'><center>".$data['username']."</center></td>
                                                <td id='td'><center><i class='fa fa-group requestbtn text-info' aria-hidden='true' rid=".$data['unique_id']." sid=".$_COOKIE['_aut_ui_']." id=btnid_".$data['id']." type='request_unfriend'></i></center></td>
                                                </tr>"; 
                                        }
                                        else{

                                            echo "<tr>
                                            <td id='td'><center><img src=".$data["profilepic"]." class='img'></center></td>
                                            <td id='td'><center>".$data['username']."</center></td>
                                            <td id='td'><center><i class='fa fa-user-plus requestbtn text-dark' aria-hidden='true' rid=".$data['unique_id']." sid=".$_COOKIE['_aut_ui_']." id=btnid_".$data['id']." type='request_send'></i></center></td>
                                            </tr>"; 
                                        }
                                    }
                                   
                                }
                            }
                            //$sql2 = $db->query("SELECT * FROM users LEFT JOIN requestfrd ON requestfrd.receiverequestid = users.unique_id WHERE sendrequestid='$unique_id'");
                       }

                        ?>
                    </tbody>
                </table>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-md-3 p-0 m-0"></div>
</div>

<button class="fmbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="frdmsg"></p>
      </div>
     
    </div>
  </div>
</div>


<script src="js/ajax.js"></script>
</body>
</html>