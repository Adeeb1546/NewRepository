

<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->

 <form method="post" action="">
  <div class="container">

    <div class="row">

      <div class="col-sm-3">
      <?php include("category/category.php"); ?>
      <?php include("include/shopbybrand.php"); ?>
      <?php include("include/shopbyprice.php"); ?>
      <?php include("include/shopbyavability.php"); ?>
       
            </div>
      <!-- /.col-lg-3 -->

      <div class="col-sm-9">
        <div><br><br><br></div>
        <div class="col-sm-8">
          <center>
            <form method="post">
              
              <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" class="form-control" required="">
              </div>
              <!-- <div class="form-group">
                <input type="text" name="" placeholder="Your Message" class="form-control"">
              </div> -->
              <div class="form-group">
                <textarea typ class="form-control" name="msg" placeholder="Your message!" required="" ></textarea>
              </div>
                <input type="submit" name="submit" value="Send Message" class="btn btn-info">
            </form>
          </center>

        </div>
    <!-- /.row -->
 <?php
 if($_SESSION['user_name']){
   $user_name = $_SESSION['user_name'];
     $sql1 = "SELECT * from user where user_name = '$user_name' ";
   $result = mysqli_query($conn, $sql1);
   $row = mysqli_fetch_array($result);
   $id = $row['user_id'];
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $review = $_POST['msg'];
   $sql = "INSERT INTO review (user_id , user_emaill, review) VALUES ( $id ,'$email', '$review')";
  $result = mysqli_query($conn, $sql);
  if($result) {

    echo "<center><h1><div class='alert alert-success'>Thanks for Review !!!</div></h1></center>";


  }else{
    echo "<center><h1><div class='alert alert-danger'>Error !!!</div></h1></center>";
  }
}
 }
?>

  </div>
 </div>
</div>
<div>
<br><br><br><br><br><br><br><br>
</div>
</form>
  <?php include("include/footer.php") ?>