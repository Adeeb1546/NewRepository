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
            <?php 
               
   
        ?>

<div class="col-sm-9">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shipping cart
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
              <?php 
                   if(isset($_GET['c_id']))
            $w_id=$_GET['c_id'];
                $sql2 = "select  * from  user";
                $result2 = mysqli_query($conn , $sql2);
                $row = mysqli_fetch_array($result2);
                $user_id = $row['user_id'];
        $sql1 = "SELECT * FROM `cart` WHERE `user_id` = '$user_id' ";
        $result1 = mysqli_query($conn , $sql1);
        while($row = mysqli_fetch_array($result1)) {
         $user_id = $row["user_id"];
         $items_id = $row["items_id"];
        
                $sql2 = "select  * from  items where item_id = '$items_id' ";
                $result2 = mysqli_query($conn , $sql2);
                $row = mysqli_fetch_array($result2);
                $item_name = $row['item_name'];
                $item_image = $row['item_image'];
               ?>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="../admin/images/items/<?php echo $item_image ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-6 text-md-left col-md-6">
                          <h4 class="product-name"><strong><?php echo $item_name  ?> </strong> <strong><?php  // $wearable_name ?></strong></h4>
                            <h4 class="product-name"><strong><?php echo $items_id ?> </strong> <strong><?php  // $wearable_name ?></strong></h4>
                            <h4 class="product-name"><strong><?php echo $user_id ?> </strong> <strong><?php  // $wearable_name ?></strong></h4>
                            <h4>
                                <small>Product description</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <!-- <input type="button" value="+" class="plus"> -->
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <!-- <input type="button" value="-" class="minus"> -->
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                  <?php }?>
                    <?php 
                   if(isset($_GET['c_id']))
            $w_id=$_GET['c_id'];
                $sql2 = "select  * from  user";
                $result2 = mysqli_query($conn , $sql2);
                $row = mysqli_fetch_array($result2);
                $user_id = $row['user_id'];
        $sql1 = "SELECT * FROM `cart` WHERE `user_id` = '$user_id' ";
        $result1 = mysqli_query($conn , $sql1);
        while($row = mysqli_fetch_array($result1)) {
         $user_id = $row["user_id"];
         $items_id = $row["items_id"];
        
                $sql3 = "select  * from  tablet where tablet_id = '$items_id' ";
                $result3 = mysqli_query($conn , $sql3);

                if(mysqli_num_rows($result3) > 0 ){
                $row = mysqli_fetch_array($result3);
                $tablet_name = $row['tablet_name'];
                $tablet_image = $row['tablet_image'];
                $tablet_price = $row['tablet_price'];
               ?>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="../admin/images/tablets/<?php echo $tablet_image ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-6 text-md-left col-md-6">
                          <h4 class="product-name"><strong><?php echo $tablet_name  ?> </strong> <strong><?php  // $wearable_name ?></strong>
                                <small>Rs<?php echo $tablet_price ; ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <!-- <input type="button" value="+" class="plus"> -->
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <!-- <input type="button" value="-" class="minus"> -->
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                  <?php } }?>

                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <!-- <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div> -->
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 10px">
                        Total price: <b>50.00€</b>
                    </div>
                </div>
            </div>
        </div>
</div>


          </div>
        </div>

 <?php include ("include/footer.php") ?>