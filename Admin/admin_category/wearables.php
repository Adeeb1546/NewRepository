 <?php include("include/header.php");?>
<?php 
  if(!isset($_SESSION['user_email'])){
    header("Location: ../../category/login.php");
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
<br><div ><a  class="btn btn-danger  btn-lg" href = "addwearables.php">Add wearables</a></div><br>
        <div class="row">
      <?php 
        $sql = "select * from  products WHERE product_category = 'wearables'";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
            $product_id = $row["product_id"];
         $product_name = $row["product_name"];
         $product_description = $row["product_description"];
         $product_image = $row["product_image"];
         $product_price = $row["product_price"];

         
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="../../viewwearable.php?w_id=<?php echo $product_id?>"><img class="card-img-top" style="width: 200px;
                    height: 200px"  src="../images/<?php echo $product_image;?>"" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h6><a href="../../viewwearable.php?w_id=<?php echo $product_id?>" style="font-weight: bold;"><?php echo $product_name ;  ?></a></h6>
                </h4>
                
                <h5>Rs <?php echo $product_price ;  ?></h5>
                <p class="card-text"><?php   ?></p>
              </div>
               
              <div class="card-footer">
                
                 <a  class="btn btn-primary  btn-lg" href="updatewearables.php?p_id=<?php echo $product_id ?>">Update</a>
            <a  class="btn btn-danger  btn-lg" href="wearables.php?del=<?php echo $product_id ?>">Delete</a>
          
          
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
      echo "      <meta http-equiv = \"refresh\" content = \"0; url = http://adeeb.cf/level1/Admin/admin_category/wearables.php\" />
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