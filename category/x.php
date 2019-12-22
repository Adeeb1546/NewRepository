<?php 
        $sql = "SELECT  * FROM  `products` WHERE `product_category` = 'Mobiles' ORDER BY product_id DESC";
        $result = mysqli_query($conn , $sql);
       
          while($row = mysqli_fetch_array($result)) {
             $product_id = $row["product_id"];
         $product_name = $row["product_name"];
         $product_description = $row["product_description"];
         $product_images = $row["product_image"];
         $product_price = $row["product_price"];
         
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="../viewitems.php?w_id=<?php echo $product_id?>"><img class="card-img-top"  style="width: 160px;
                    height: 212px" src="../Admin/images/<?php echo $product_images;?>"" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h6><a href="#" style="font-weight: bold;" ><?php echo $product_name ;  ?></a></h6>
                </h4>
                
                <p class="card-text"><?php   ?></p>
              </div>
               
              <div class="card-footer bg-info">
                <h5>Rs <?php echo $product_price;  ?></h5>
              <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
                
              </div>
              <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                
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
      echo "<h1> Deleted successfully </h1>";
      echo "      <meta http-equiv = \"refresh\" content = \"0; url = http://localhost/level1/category/mobiles.php\" />
";
    }
  }
  ?>