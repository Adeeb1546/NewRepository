

<?php include("include/header.php");?>
 <?php  if(!isset($_SESSION['user_name'])){
                   header("Location: category/login.php");
                    } else { ?>
<?php include("include/database.php"); ?>
  <!-- Navigation -->
<?php include("include/navigation.php"); ?>
  <!-- Page Content -->
 <form method="post" action="">
  <div class="container">

    <div class="row">

      <div class="col-sm-3">
      <?php include("category/category.php"); ?>
      <!-- <?php //include("include/shopbybrand.php"); ?>
      <?php //include("include/shopbyprice.php"); ?>
      <?php //include("include/shopbyavability.php"); ?> -->
      </div>
    
      <!-- /.col-lg-3 -->

      <div class="col-sm-6">

        <div class="row">
        
        <?php 
        if(isset($_GET['w_id']))
            $w_id=$_GET['w_id'];

        $sql = "SELECT * FROM `products` WHERE `product_id` = '$w_id'";
        $result1 = mysqli_query($conn , $sql);
       
        while($row = mysqli_fetch_array($result1)) {
         $product_id = $row["product_id"];
         $product_name = $row["product_name"];
         $product_description = $row["product_description"];
         $product_image = $row["product_image"];
         $product_price = $row["product_price"];
        ?>
          <div class="col-sm-4 col-md-6 mb-4">
            <div class="">
              <img class="card-img-top" style="width: 240px;
                    height: 290px" src="Admin/images/<?php echo $product_image;?>" alt="">
            </div>
      	  </div>
              

      	   <div class="col-sm-4 col-md-6 mb-4">
            <div class="card h-100 ">
           

              <div class="card-body">
                <h4 class="card-title">
                  <h5><a href="#" style="font-weight: bold;"><?php echo $product_name ;  ?></a></h5>
                </h4>
                <h5>Rs <?php echo $product_price ;  ?></h5>
                <p class="card-text"><?php echo $product_description ;  ?></p>
              </div>
               
              <div class="card-footer">


                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <div><br></div>
                               <button type="submit" name="cartt" class="btn btn-info  btn-lg" ><span class="fa fa-shopping-cart" style="color: #2c3e50;"></span> Add to cart</button>
                <?php 
/*//<a href="cart/addtocart.php?c_id=<?php echo $item_id  ?>">*/
    if(isset($_POST['cartt'])){
   // echo $sql = "INSERT INTO products(cart) VALUES (1) WHERE product_id = $w_id ";
      $u_name = $_SESSION['user_name'];
$sql = "SELECT user_id FROM user WHERE user_name = '$u_name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$u_id_cart = $row['user_id'];

 $sql ="UPDATE `products` SET`cart`= (1), `user_cart_id` = $u_id_cart WHERE product_id = $w_id ";

    $result = mysqli_query($conn, $sql);
    if($result){
      echo "      <meta http-equiv = \"refresh\" content = \"0; url = https://adeeb.cf/level1/cart/addtocart.php?c_id=$product_id\" />

";
   }else{
    "eerrrooorr";
   }
 }


 ?>

  <?php 
/*//<a href="cart/addtocart.php?c_id=<?php echo $item_id  ?>">*/
    if(isset($_POST['wishlistt'])){
   // echo $sql = "INSERT INTO products(cart) VALUES (1) WHERE product_id = $w_id ";
      $u_name = $_SESSION['user_name'];
$sql = "SELECT user_id FROM user WHERE user_name = '$u_name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$u_id_cart = $row['user_id'];

$sql ="UPDATE `products` SET`wishlist`= (1), `user_cart_id` = $u_id_cart WHERE product_id = $w_id ";

    $result = mysqli_query($conn, $sql);
    if($result){
     echo "      <meta http-equiv = \"refresh\" content = \"0; url = https://adeeb.cf/level1/cart/addtowishlist.php?c_id=$product_id\" />

";
   }else{
    "eerrrooorr";
   }
 }


 ?>


               
                <div><br></div>
                <button type="submit" name="wishlistt" class="btn btn-secondary  btn-lg"><span class="fa fa-heart" style="color: #ED4C67;"></span> Add to wishlist</button>
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