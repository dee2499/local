<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
               
        }
        else
            {
                echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            }
    require_once ('config.php');
    
    if(isset($_POST['delete'])){
        
        $query="UPDATE registration SET deleted=1 WHERE id=".$_POST['id'];
        mysql_query($query);

    }

    
   
    
    ?>
<html>
    <head>
        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/custom.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>
    <body style="background-color: #E4E4E4">
        <title>View Record    </title>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="title"><h1>View Records</h1></div>
                    <form name="view" method="POST">
                        <div class="form-group"><label>Sort by name:</label><input class="form-control" type="text" name="sortname" >
                        </div>                        
                        <input class="btn btn-primary" value="Sort" name="sort" type="submit" />    
                    </form>
                    
                    <?php 

                        if(isset($_POST['sort'])){
        
                            $sort = $_POST['sortname'];

                            if ($sort != '')
                                {
                                  $query="SELECT * FROM registration WHERE name = '$sort' AND deleted=0 AND hidden=0";
                                }
                                else
                                {
                                    $query = "SELECT * FROM registration WHERE deleted=0 AND hidden=0";        
                                }
                        }else{
                            $query = "SELECT * FROM registration WHERE deleted=0 AND hidden=0";
                            }
                            $data = mysql_query($query);
                            if($data > 0){
                            while($row=mysql_fetch_assoc($data)){
                            // echo "<pre>";
                            // print_r($row);
                            // die;
                        ?>

                    <form name="view" method="POST" onsubmit="if (confirm('Are you sure?')) confirmDelete(<?php echo $row['id'];?>); return false">
                        <div class="box">
                            <div class="col-sm-6">
                                <div class="image"><img src="uploads/<?php echo $row["image"]?>" width="500"/></div>
                                <br/>
                                <input type="hidden" value="<?php echo $row['id'];?>" name="id" />
                                <div class="name"><label>Name:-</label><?php echo $row["name"];?></div>
                                <div class="sname"><label>Surname:-</label><?php echo $row["surname"]?></div>
                                <div class="mail"><label>Email:-</label><?php echo $row["email"]?></div>
                                <div class="dob"><label>Date of birth:-</label><?php echo date('d/m/Y', $row['dob']);?></div>
                                <div class="phone"><label>Phone Number:-</label><?php echo $row["phone"]?></div>
                                <div class="gender"><label>gender:-</label><?php echo $row["gender"]?></div>
                                <div class="add" ><label>Address:-</label><?php echo $row["address"]?></div>
                                <div class="city"><label>City:-</label><?php echo $row["city"]?></div>
                                <div class="about"><label>About :-</label><?php echo $row["about"]?></div>
                                <br/><br/>
                                
                                <?php 
                                if(isset($_SESSION['user']) && ($_SESSION['user']) == 1 ){

                                ?>
                                <input class="btn btn-danger"value="Delete" name="delete" type="submit" />
                                
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit Record</a>
                                <?php } ?>
                                <br/><br/>
                            </div>
                        </div>
                    </form>
                        <?php
                        }
                        }
                    else{
                        ?>
                        <h1>No Record Found</h1>
                    <?php 
                }
                        ?>

                        <div class="add-record">
                    <a href="add.php" class="btn btn-primary" >Add New Record</a>

                    <a href="logout.php" class="btn btn-danger">Logout</a></div>
                </div>
            </div>
        </div>
    </body>
</html>