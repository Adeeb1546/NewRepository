<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      <?php include("include/category.php"); ?>
      <?php include("include/shopbybrand.php"); ?>
      <?php include("include/shopbyprice.php"); ?>
      <?php include("include/shopbyavability.php"); ?>
       
            </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
      <div>
        <br>
        </div>
        <div class="row">
<?php 
        $sql = "SELECT * FROM products WHERE product_category = 'Tablets' ORDER BY Product_id DESC ";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
            $tablet_id = $row["product_id"];
         $tablet_name = $row["product_name"];
         $tablet_description = $row["product_description"];
         $tablet_image = $row["product_image"];
         $tablet_price = $row["product_price"];
         
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="../viewtablet.php?w_id=<?php echo  $tablet_id ?>"><img class="card-img-top" style="width: 200px;
                    height: 200px" src=../Admin/images/<?php echo $tablet_image;?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h6><a href="../viewtablet.php?w_id=<?php echo  $tablet_id ?>" style="font-weight: bold;" ><?php echo $tablet_name ;  ?></a></h6>
                </h4>
                
                <p class="card-text"><?php   ?></p>
              </div>
                  <div class="card-footer bg-info">
                <h5>Rs <?php echo $tablet_price;  ?></h5>
              <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>

          </div>

        <?php  }?>
    </div>
    <!-- /.row -->

  </div>
 </div>
</div>
  <?php include ("include/footer.php") ?>