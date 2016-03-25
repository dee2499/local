

<?php 
   include("config.php");
   $id=$_REQUEST["id"];
   if(isset($_POST["submit"]))
   {
   $fname=$_POST["firstname"];
   $lname=$_POST["lastname"];
   $phone=$_POST["number"];
   $address=$_POST["address"];
   $query="update users set firstname='$fname',lastname='$lname',gender='$gender',dob='$dob',phone='$phone',address='$address'where empid='$id'";
   mysql_query($query) or die(mysql_error());
   }
   $q="select * from users where id=$id";
   $record=mysql_query($q);
   while($r=mysql_fetch_assoc($record))
   {
   $f=$r["first_name"];
   $l=$r["last_name"];
   $u=$r["user_city"];
   $n=$r["number"];
  	}
   
      if($query){
           echo "<script>alert('Employee Updated'); window.location='user-view.php';</script>";  
   		}
   ?>
<div class="mainbar">
   <div class="page-head">
      <h2 class="pull-left"><i><img src="images/u.png" width="19px" height="17px"></i> Users</h2>
      </h2>
      <div class="clearfix"></div>
   </div>
   <div class="matter">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="widget wgreen">
                  <div class="widget-head">
                     <div class="pull-left">Update User</div>
                     <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                        <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="widget-content">
                     <div class="padd">
                        <br />
                        <form class="form-horizontal" role="form" method="post">
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Firstname</label>
                              <div class="col-lg-5">
                                 <input type="text" name="firstname" class="form-control" value="<?php echo $f;?>"  >
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Lastname</label>
                              <div class="col-lg-5">
                                 <input type="text" name="lastname" class="form-control" value="<?php echo $l;?>" >
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Phone</label>
                              <div class="col-lg-5">
                                 <input type="text" name="phone" class="form-control" value="<?php echo $n;?>" >
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-6">
                                 <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Update User">
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="widget-foot"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
</div>


