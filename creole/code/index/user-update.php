<?php 
error_reporting(E_ERROR | E_PARSE);
 
 include("config.php");
   $id=$_REQUEST["id"];
   if(isset($_POST["submit"]))
   {
   $fname=$_POST["firstname"];
   $lname=$_POST["lastname"];
   $phone=$_POST["number"];
   $address=$_POST["address"];
   $query="update users set first_name='$fname',last_name='$lname',user_city='$address',number='$phone' where id='$id'";
   mysqli_query($con,$query) or die(mysqli_error());
   header("location:view.php?msg=successfully Updated");

   }
   $q="select * from users where id=$id";
   $record=mysqli_query($con,$q);
   $r=mysqli_fetch_array($record,MYSQLI_ASSOC);
   
   $f=$r["first_name"];
   $l=$r["last_name"];
   $u=$r["user_city"];
   $n=$r["number"];
  	?>
                     <div class="pull-left">Update User</div>
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
                                 <input type="text" name="number" class="form-control" value="<?php echo $n;?>" >
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="col-lg-2 control-label">Address</label>
                              <div class="col-lg-5">
                                 <input type="text" name="address" class="form-control" value="<?php echo $u;?>" >
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-6">
                                 <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Update User">
                              </div>
                           </div>
                        </form>
                     
				</div>
<div class="clearfix"></div>
</div>


