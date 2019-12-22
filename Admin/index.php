

  <?php include("include/header.php");?>

<?php 
if(!isset($_SESSION['status'])){
  header("Location: ../index.php");
}
// if($name = 'user'){
//    header("Location: ../index.php");
// }
// echo $sql = "SELECT status FROM user where status = 'user' AND user_name = '$name'";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);
// echo $status = $row['status'] ;
// if($status === 'user'){
//     header("Location: ../index.php");
//  //echo "Meow";
// }

// if($_SESSION['status'] != 'user'){
//   echo $_SESSION['status'] ;

//    // header("Location: ../index.php");
//   }


 ?>

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

      <div class="col-sm-3">
      <?php include("include/category.php"); ?>
   
       
      </div>

      <!-- /.col-lg-3 -->

      <div class="col-sm-9">

        <!-- <div class="row"> -->
  <!--  -->
      
          
              
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                <tr>
                <th >#</th>
              <th >username</th>
              <th >Product Name</th>
              <th >Category</th>
              <th >Brand</th>
              <th >Description</th>
              <th >cart</th>
              <th >Price</th>
              <th >UserID</th>
              <th >ProductID</th>
              
             

                </tr>
                </thead>
                <tbody>
     
                                    <?php 
         $sql = "SELECT * from  `products` inner join user on products.user_cart_id = user.user_id WHERE `cart` = 1 AND user_cart_id !=0 ";
        $result = mysqli_query($conn , $sql);
       $counter = 0;
          while($row = mysqli_fetch_array($result)) {
           $counter++; 
           $product_name = $row["product_name"];
           $product_price = $row["product_price"];
           $product_brand = $row["product_brand"];

           $product_category = $row["product_category"];

           $cart = $row["cart"];

           $product_description = $row["product_description"];
           $user_cart_id = $row["user_cart_id"];
           $product_id = $row["product_id"];
           $user_name = $row['user_name'];
      
         
        ?>  
  
   
                <tr>
      <td><?php echo $counter;?></td>
          <td><?php echo $user_name;?></td>
           
                <td><?php echo $product_name;?></td>
                <td ><?php echo $product_category;?></td>
                 <td ><?php echo $product_brand;?></td>
                  <td ><?php echo $product_description;?></td>
                 <td ><?php echo $cart;?></td>
            <td ><?php echo $product_price;?></td>
            <td><?php echo $user_cart_id;?></td>
            <td><?php echo $product_id;?></td>
             
          
                </tr>
                </tbody>
                 <?php   } ?>
                </table>
                 </div>
               </div>
            
     
       
<?php 
 if(isset($_GET['del'])){
  $delete = $_GET['del'];
     $sql = "DELETE FROM `user` WHERE `user_id` = $delete";
    $result = mysqli_query($conn , $sql); 
    if($result){
      session_destroy();
      echo "<center><h1><div class='alert alert-danger'>user has been deleted</div></h1><c/enter>";
      echo "      <meta http-equiv = \"refresh\" content = \"2; url = http://localhost/level1/admin/user.php\" />
";
    }
  }
  ?>
    <!-- </div> -->
    <!-- /.row -->

  </div>
 </div>
</div>
</div>
<br><br><br><br><br><br>
  <?php include ("include/footer.php") ?>