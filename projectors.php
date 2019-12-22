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
        if(isset($_GET['w_id']))
            $w_id=$_GET['w_id'];

        $sql1 = "SELECT * FROM `projectors` WHERE `projectors_id` = '$w_id' ";
        $result1 = mysqli_query($conn , $sql1);
       
        while($row = mysqli_fetch_array($result1)) {
         $projectors_id = $row["projectors_id"];
         $projectors_name = $row["projectors_name"];
         $projectors_description = $row["projectors_description"];
         $projectors_image = $row["projectors_image"];
         $projectors_price = $row["projectors_price"];
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src=<?php echo $projector_image;?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $projector_name ;  ?></a>
                </h4>
               
                <p class="card-text"><?php echo $projector_description ;  ?></p>
              </div>
              <div class="card-footer bg-info">
                <h5>Rs <?php echo $projector_price;  ?></h5>
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