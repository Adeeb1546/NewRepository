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
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
              <?php 
                $u_name = $_SESSION['user_name'];
                $sql = "SELECT user_id FROM user WHERE user_name = '$u_name'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $u_id_cart = $row['user_id'];

                $sql = "SELECT * FROM products WHERE cart = 1 AND user_cart_id = $u_id_cart";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $product_id = $row['product_id'];
                    $product_image = $row['product_image'];
                    $product_name = $row['product_name'];
                    $product_description = $row['product_description'];
                    $product_price = $row['product_price'];


               ?>   <form method="GET">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="../Admin/images/<?php echo $product_image ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-6 text-md-left col-md-6">
                          <h5 class="product-name"><strong><?php echo $product_name  ?> </strong> <strong><?php  // $wearable_name ?></strong></h5>
                            
                            <!-- <h4 class="product-name"><strong><?php// echo $user_id ?> </strong> <strong><?php  // $wearable_name ?></strong></h4> -->
                            <h4>
                                <small><?php echo $product_description; ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?php echo $product_price; ?> <span class="text-muted">x</span></strong></h6>
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
                                <a type="submit" name="delete" href="addtocart.php?delete=<?php echo $product_id ?>"class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                    <hr>
                  <?php }}?>
                

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
                       
                    </div>
                </div>
            </div>
        </div>
</div>
    
  <?php

            if(isset($_GET['delete'])){
                $del = $_GET['delete'];
   
            $sql = "UPDATE products SET `user_cart_id` = 0 ,`cart` = 0  WHERE product_id = '$del' ";
            $result = mysqli_query($conn,$sql);
                if($result){
                   
                 echo "      <meta http-equiv = \"refresh\" content = \"0; url = http://adeeb.cf/level1/cart/addtocart.php\" />";
                }else{
                    echo "Error";
                }
                }
         ?>
                  
          </div>
        </div>

 <?php include ("include/footer.php") ?>