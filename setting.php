
 <div class="row p-0 m-0">
   <div class="col-md-3 p-0 m-0"></div>
   <div class="col-md-6 p-0 m-0">
     <div class="card">
       <div class="card-header">
         <div class="card-title">Setting</div>
       </div>
       <div class="card-body">
         <ul class="list-group">
           <li class="list-group-item" id="accountbtn"><button class="w-100 accountcenterbtn">Account Center <i class="fa fa-user-circle"></i></button></li>
           <li class="list-group-item"><button class="w-100 accountcenterbtn" data-bs-toggle="modal" data-bs-target="#deleteaccount">Delete Account <i class="fa fa-arrow-right"></i></button></li>
         </ul>
       </div>
     </div>
     <ul class="list-group text-center collapse" id="lgroup">
       
         <li class="list-group-item mt-2 mb-2 smenu" pid="yourprofile">Your Profile <i class="fa fa-user ms-2"></i></li>
         <li class="list-group-item mb-2 mt-2 smenu" pid="passwordandsecurity">Password And Security <i class="fa fa-key ms-2"></i></li>
         <li class="list-group-item mt-2 mb-2 smenu" pid="updateyouraccount" id="updateyouraccount">Update Your Account<i class="fa fa-edit ms-2"></i></li>
     </ul>
     <!--- Profile Dettails -->
     <div class="card collapse" id="profileshow">
       <div class="card-header text-danger"><h3><b>Your Profile Info</b></h3><hr></div>
       <div class="card-body">
         <ul class="list-group">
            
                
                   </ul>
                   <table id="table">
                  <tbody>
                  <tr><td>Name</td><td>testing</td></tr>
                  <tr><td>username</td><td>test_01</td></tr>
                  <tr><td>email</td><td>test01#gmail.com</td></tr>
                  <tr><td>Mobile Number</td><td>0000000000</td></tr>
                         
                 </tbody></table>
       </div>
       <div class="card-footer d-flex justify-content-end">
         <button class="btn btn-dark w-50 closebtn" type="button">Close</button>
       </div>
     </div>
     <!--- end your profile conding -->
     
     <!--- password change coding --->
     
     <div class="card collapse" id="changepasscollapse">
       <div class="card-header">
         <h3><b>Change Your Password</b></h3>
       </div>
       <div class="card-body">
         <form class="update_pass_frm text-dark">
           <div class="form-group">
             <label for="currentpass" class="">Current Password</label>
             <input type="password" class="form-control" name="currentpass" id="currentpass" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="newpass" class="">New Password</label>
             <input type="password" class="form-control" name="newpass" id="newpass" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="confirmpass" class="">Confirm Password</label>
             <input type="password" class="form-control" name="confirmpass" id="confirmpass" autocomplete="off">
           </div>
           <center><button class="btn btn-warning updatepassbtn mt-3 mb-3 w-100" type="submit">Update Your Password</button></center>
         </form>
       </div>
       <div class="card-footer d-flex justify-content-end">
         <button class="btn btn-dark closebtn w-50" type="button">Close</button>
       </div>
     </div>
     <!--- end change Password coding -->
     
     <!--- start update form -->
     <div class="card collapse" id="pupdation">
       <div class="card-header">
         <div class="card-title"><h3>Profile Updation</h3></div>
       </div>
       <div class="card-body">
         <form class="updatedata p-3">
       <div class="form-group mb-2">
         <label for="forname">Your Name</label>
         <input type="text" class="form-control" id="fname" name="fname">
       </div>
       <div class="form-group mb-2">
         <label for="uname">Your Username</label>
         <input type="text" class="form-control" id="uname" name="uname">
       </div>
       <div class="form-group mb-2">
         <label for="email">Your Email Address</label>
         <input type="email" class="form-control" id="email" name="email" disabled placeholder="Email Not Update">
       </div>
       <div class="form-group mb-2">
         <label for="phone">Your Mobile Number</label>
         <input type="text" class="form-control" id="phone" name="phone">
       </div>
       <center><button class="btn btn-warning text-dark mt-2 mb-2 updateprofilebtn" type="submit">Update Your Profile</button></center>
     </form>
       </div>
       <div class="card-footer d-flex justify-content-end">
         <button class="btn btn-dark btnclose w-50" type="button">Close</button>
       </div>
     </div>
</div>
   
<div class="col-md-3 p-0 m-0">
     <!--- delete account modal -->
<!-- Modal -->
<div class="modal fade" id="deleteaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Account Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <form class="deleteaccountfrm">
              <label for="reasion">Any Reasion</label>
              <textarea name="reasion" id="reasion" cols="10" rows="3" class="form-control"></textarea>
              <center><button class="btn btn-danger mt-3 mb-3 profiledelbtn" type="submit">Delete Account</button></center>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   </div>
 </div>
 <script src="js/set.js"></script>

</div>
    <div class="col-md-3 p-0 m-0"></div>

 </div>  
<script src="js/setting.js"></script>

</div>
 </div>