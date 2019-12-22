

<?php include("include/header.php");?>
 <?php  if(!isset($_SESSION['user_name'])){
                    header("Location: category/login.php"); }else {?>
<?php include("include/database.php"); ?>
  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="container">

    <div class="row">

      <div class="col-sm-3">
      <?php include("category/category.php"); ?>
      <!-- <?php //include("include/shopbybrand.php"); ?>
      <?php //include("include/shopbyprice.php"); ?>
      <?php //include("include/shopbyavability.php"); ?> -->
      </div>
    
      <!-- /.col-lg-3 -->

      <div class="col-sm-9">

        <div class="row">
        <?php 
        if(isset($_GET['w_id']))
        		$w_id=$_GET['w_id'];

        $sql1 = "SELECT * FROM `wearables` WHERE `wearable_id` = '$w_id' ";
        $result1 = mysqli_query($conn , $sql1);
       
          while($row = mysqli_fetch_array($result1)) {
         $wearable_id = $row["wearable_id"];
         $wearable_name = $row["wearable_name"];
         $wearable_description = $row["wearable_description"];
         $wearable_image = $row["wearable_image"];
         $wearable_price = $row["wearable_price"];
         
        ?>
          <div class="col-sm-4 col-md-6 mb-4">
            <div class="">
              <a href="viewwearables.php?w_id=<?php echo $wearable_id ?> "><img class="card-img-top" height="400px" src="Admin/images/<?php echo $wearable_image;?>" alt=""></a>
            </div>
      	  </div>
              

      	   <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">
           

              <div class="card-body">
                <h4 class="card-title">
                  <h5><a href="#" style="font-weight: bold;" ><?php echo $wearable_name ;  ?></a></h5>
                </h4>
                <h5>Rs <?php echo $wearable_price ;  ?></h5>
                <p class="card-text"><?php echo $wearable_description ;  ?></p>
              </div>
               
              <div class="card-footer">


                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <div><br></div>
                <button type="button" class="btn btn-info  btn-lg">Add to cart</button>
                <div><br></div>
                <button type="button" class="btn btn-secondary  btn-lg"><span class="fa fa-heart" style="color: #ED4C67;"></span> Add to wishlist</button>
              </div>
            </div>

          </div>



  </div>

        <?php  }?>
    </div>
    <!-- /.row -->

  </div>
 </div>
</form>
  <?php include ("include/footer.php") ?>
  <?php } ?>