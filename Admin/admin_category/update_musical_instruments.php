<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <?php include("include/navigation.php"); ?>
 <?php 
if(!isset($_SESSION['status'])){
  header("Location: ../../index.php");
}
 ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="./css/signup.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
                        </h1>
            <h1 class="wv-heading--subtitle">
                
                <?php 
                if(isset($_GET['mi_id'])){
                	$t_id =$_GET['mi_id'];

                 $sql = "SELECT * FROM `products` WHERE `product_id` ='$t_id' ";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $musical_instrument_id = $row['product_id'];
                $musical_instrument_name = $row['product_name'];
                $musical_instrument_Description = $row['product_description'];
                $musical_instrument_price = $row['product_price'];
                $musical_instrument_image = $row['product_image'];



                ?>
            </h1>

      
         </div>
      </div>
      <div class="row">
      	<div class="d-flex flex-row">
      	<div><?php include("include/category.php"); ?></div><hr>
      	<br><br><div class="rounded"><img src="../images/<?php echo $musical_instrument_image; ?>" style="width: 200px;
                    height: 200px" ></div>
         <div class="col-sm-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                  	<div class="form-group">
                     
                  </div>
                     <input type="text" name="musical_instrument_name"  class="form-control my-input" id="name" value="<?php echo $musical_instrument_name; ?>">
                  </div>
                  <input type="file" name="image"  alt="<?php echo $musical_instrument_image ; ?>" >
                   <div class="form-group">
                     <input type="number" min="0" name="musical_instrument_price" id="phone"  class="form-control my-input" value="<?php echo $musical_instrument_price; ?>" required="">
                  </div>
                  
                 <textarea name="musical_instrument_Description" rows="4"  cols="43"><?php echo $musical_instrument_Description; ?> </textarea>
                 

                  <div class="text-center ">
                     <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">submit</button>
                  </div>
              <?php }?>
                
                 
               </form>
   <?php

                      

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    $musical_instrument_name=$_POST['musical_instrument_name'];
    $musical_instrument_price=$_POST['musical_instrument_price'];
    $musical_instrument_Description=$_POST['musical_instrument_Description'];
 
       if(isset($_FILES['image'])){
      $_FILES['image']['tmp_name'];

    // Get image name
     $image = $_FILES['image']['name'];

    // image file directory
     $target = "../images/".basename($image);
     if($target == "../images/"){
      $sql = "UPDATE products SET `product_name`='$musical_instrument_name',`product_description`='$musical_instrument_Description',`product_price`= $musical_instrument_price WHERE `product_id` = '$t_id' ";
     }else{
       $sql = "UPDATE products SET `product_name`='$musical_instrument_name',`product_description`='$musical_instrument_Description',`product_image`='$image',`product_price`= $musical_instrument_price WHERE `product_id` = '$t_id' ";
     }

    
    // execute query
    $result= mysqli_query($conn, $sql);
    if($result){
      // $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
      // $txt = "Product ".$musical_instrument_name." added by ".$_SESSION['user_name']."\n";
      // fwrite($myfile, $txt);
      // $fp = fopen('a.txt', 'w');
      
      // fwrite($fp, $txt);
      // fclose($fp);

$txt = "Product name ".$musical_instrument_name."  price ".$musical_instrument_price." description ".$musical_instrument_Description." image name ".$musical_instrument_image." added by ".$_SESSION['user_name']."\n";
    $myfile = file_put_contents('logs/logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);


       echo "<center><h1><div class='alert alert-success'>Update successfully!</div></h1><c/enter>";
      echo "      <meta http-equiv = \"refresh\" content = \"1; url = http://adeeb.cf/level1/Admin/admin_category/musical_instruments.php\" />

";
    }
    else{
      echo "fuck";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";

    }else{
      $msg = "Failed to upload image";
    }
  }
  }
?>
            </div>
         </div>
      </div>
  </div>
   </div>
</body>
<br><br><br><br><br><br>
 <?php include ("../include/footer.php") ?>