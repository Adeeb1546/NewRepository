 <?php include("include/header.php");?>
<?php 
if(!isset($_SESSION['status'])){
  header("Location: ../../index.php");
}
 ?>

<?php include("include/database.php"); ?>
  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->
  <?php 
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
<br><div ><a  class="btn btn-danger  btn-lg" href = "addprojectors.php">Add projectors</a></div><br>
        <div class="row">
    <?php 
        $sql = "select * from  products WHERE product_category = 'Projectors'";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
         $product_id = $row["product_id"];
         $projector_name = $row["product_name"];
         $projector_description = $row["product_description"];
         $projector_image = $row["product_image"];
         $projector_price = $row["product_price"];

         
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="../../viewprojector.php?w_id=<?php echo  $product_id ?>"><img class="card-img-top" style="width: 160px;
                    height: 212px" src=../images/<?php echo $projector_image;?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h6><a href="../../viewprojector.php?w_id=<?php echo  $product_id ?>" style="font-weight: bold;" ><?php echo $projector_name ;  ?></a>
                </h4></h6>
                
                <h5>Rs <?php echo $projector_price ;  ?></h5>
                <p class="card-text"><?php   ?></p>
              </div>
               
              <div class="card-footer">
                
                <a  class="btn btn-primary  btn-lg" href="update_projectors.php?pr_id=<?php echo $product_id ?>">Update</a>
             <a  class="btn btn-danger  btn-lg" href="projectors.php?del=<?php  echo $product_id ?>">Delete</a>
          
              </div>
            </div>

          </div>

        <?php  }?>
<?php 
 if(isset($_GET['del'])){
  $delete = $_GET['del'];
     $sql = "DELETE FROM products WHERE product_id = $delete";
    $result = mysqli_query($conn , $sql); 
    if($result){
       echo "<center><h1><div class='alert alert-danger'> Deleted  successfully !</div></h1><c/enter>";
      echo "      <meta http-equiv = \"refresh\" content = \"0; url = http://adeeb.cf/level1/Admin/admin_category/projectors.php\" />
";
    }
  }
  ?>
    </div>
    <!-- /.row -->

  </div>
 </div>
</div>
<br><br><br><br><br><br>
  <?php include ("include/footer.php") ?>