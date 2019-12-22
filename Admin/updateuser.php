<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <?php include("include/navigation.php"); ?>
 <?php 
if(!isset($_SESSION['status'])){
  header("Location: ../../index.php");
}
 ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="./css/signup.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">

      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
                        </h1>
            <h1 class="wv-heading--subtitle">
                
                <?php 
                if(isset($_GET['M_id'])){
                	$M_id =$_GET['M_id'];

                 $sql = "SELECT * FROM `user` WHERE `user_id` ='$M_id' ";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_email = $row['user_email'];
                $user_password = $row['user_password'];
                $user_phone = $row['user_phone'];

                 } ?>
             </h1>
             <div class="row">
        <div class="center">
       
        <br><br>

         <div class="col-sm-13 mx-auto">
            <div class="myform form ">
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <input type="text" name="user_name"  class="form-control " id="name" value="<?php echo $user_name; ?>">
                  </div>
                  
                   <div class="form-group">
                     <input type="text"  name="user_email"  class="form-control my-input" value="<?php echo $user_email; ?>" required="">
                  </div>
                  
                 <div class="form-group">
                     <input type="text"  name="user_password"  class="form-control my-input" value="<?php echo $user_password; ?>" >
                  </div>

                    <div class="form-group">
                     <input type="text"  name="user_phone"  class="form-control my-input" value="<?php echo $user_phone; ?>" >
                  </div>

                   <div class="form-group">
                  <select class="form-control inputstl" name="status">
                    <option value="user">Choose ...</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                  </select>
                  </div>

                  <div class="text-center ">
                     <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">Update</button>
                  </div>
                </form>
                <?php              

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_phone=$_POST['user_phone'];
    $user_password=$_POST['user_password'];
     $user_password = md5($user_password);
    $status=$_POST['status'];


    
  $sql = "UPDATE `user` SET `user_name`='$user_name' ,`user_email`='$user_email' ,  `user_phone` = '$user_phone' , `status` =  '$status' ,`user_password`= '$user_password'  WHERE `user_id` = $M_id ";

   $result= mysqli_query($conn, $sql);
    if($result){
      echo "<center><h1><div class='alert alert-success'>Update successfully!</div></h1><c/enter>";
    
       echo "<meta http-equiv = \"refresh\" content = \"1; url = http://adeeb.cf/level1/Admin/user.php\" />";
    }else{
      echo "error";
    }


}
    ?>






      


          </div>
         </div>
       
      </div>
  </div>
         </div>
      </div>
    </div>
     
 <?php include ("../include/footer.php") ?>