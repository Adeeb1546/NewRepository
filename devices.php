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

        <div class="row">
<?php 
        $sql = "select * from  tv";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
          $tv_id = $row["tv_id"];
         $tv_name = $row["tv_name"];
         $tv_image = $row["tv_image"];
         $tv_description = $row["tv_description"];
          $tv_price = $row["tv_price"];
                 
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="../viewdevice.php?w_id=<?php echo $tv_id  ?>"><img class="card-img-top" src=<?php echo $tv_image;?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $tv_name ;  ?></a>
                </h4>
                <h5><?php echo $tv_price ;  ?></h5>
                <p class="card-text"><?php echo $tv_description ;  ?></p>
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