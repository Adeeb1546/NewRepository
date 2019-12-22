

  <?php include("include/header.php");?>

<?php 
if(!isset($_SESSION['status'])){
  header("Location: ../index.php");
}


 ?>

  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->
  <?php a
//  if(!isset($_SESSION['user_email'])){
  //  header("Location: category/login.php");
  //}
 ?>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      <?php include("include/category.php"); ?>
   
       
      </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- <div class="row"> -->
  <!--  -->
      
          <h1><div class="btn btn-info">Users</div></h1>
              
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                <tr>
              <th >Name</th>
              <th >Email</th>
              <th >Status</th>
              <th >Update</th>
              <th >Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
        $sql = "SELECT * from  `user` ";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
           $user_id = $row["user_id"];
           $user_name = $row["user_name"];
           $user_email = $row["user_email"];
           $user_status = $row["status"];
        // $user_image = $row["user_image"];
         //$user_price = $row["user_price"];

         
        ?>
                <tr>
                  <!-- <th >Name</th> -->
             <!--  <td >Email</td>
              <td >Status</td>
              <td >Update</td>
              <td >Delete</td> -->
                <td><?php echo $user_name;?></td>
                <td ><?php echo $user_email;?></td>
                 <td ><?php echo $user_status;?></td>
               <td><a  class="btn btn-primary  btn-lg" href="updateuser.php?M_id=<?php echo $user_id ?>">Update</a></td>
               <td> <a  class="btn btn-danger  btn-lg" href="user.php?del=<?php echo $user_id ?>">Delete</a></td>

                </tr>
                </tbody>
                 <?php  }?>
                </table>
                 </div>
               </div>
            
     
       
<?php 
 if(isset($_GET['del'])){
  $delete = $_GET['del'];
     $sql = "DELETE FROM `user` WHERE `user_id` = $delete";
    $result = mysqli_query($conn , $sql); 
    if($result){
 //     session_destroy();
      echo "<center><h1><div class='alert alert-danger'>user has been deleted</div></h1><c/enter>";
      echo "      <meta http-equiv = \"refresh\" content = \"2; url = http://adeeb.cf/level1/Admin/user.php\" />
";
    }
  }
  ?>
    <!-- </div> -->
    <!-- /.row -->

  </div>
 </div>
</div>
</div>
<br><br><br><br><br><br>
  <?php include ("include/footer.php") ?>