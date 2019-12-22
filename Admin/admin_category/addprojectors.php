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
                Add information
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                     <input type="text" name="projectors_name"  class="form-control my-input" id="name" placeholder="Name" required="">
                  </div>
                     <div class="form-group">
                  <input type="file" name="image" >
                      </div>
                  <div class="form-group">
                      <select class="custom-select mr-sm-2" name="projector_brand" required="">
                        <option value="Samsung">Choose Brand...</option>
               <option value="Samsung">Samsung</option>
                  <option value="Apple">Apple</option>
                  <option value="Inflix">Inflix</option>
                    <option value="Nokia">Nokia</option>
                    <option value="Oppo">Oppo</option>
                    </select>
                    </div>
                   <div class="form-group">
                     <input type="number" min="0" name="projectors_price" id="phone"  class="form-control my-input" placeholder="Price" required="">
                  </div>
                 <textarea name="projectors_Description" id="textAreaField" rows="4"  cols="43"></textarea>
                 

                  <div class="text-center ">
                     <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">submit</button>
                  </div>
                
                 
               </form>
   <?php

                      

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    $projectors_name=$_POST['projectors_name'];
    $projectors_price=$_POST['projectors_price'];
    $projectors_Description=$_POST['projectors_Description'];
    $projectors_brand=$_POST['projector_brand'];

       if(isset($_FILES['image'])){
      $_FILES['image']['tmp_name'];

    // Get image name
     $image = $_FILES['image']['name'];

    // image file directory
     $target = "../images/".basename($image);


     $sql = "INSERT INTO products(product_name,product_price,product_description,product_image,product_category,product_brand) VALUES ('$projectors_name','$projectors_price','$projectors_Description','$image','Projectors','$projectors_brand')";
    // execute query
    $result= mysqli_query($conn, $sql);
    if($result){
       echo "<center><h1><div class='alert alert-success'>Inserted successfully !</div></h1><c/enter>";
     
      echo "      <meta http-equiv = \"refresh\" content = \"1; url = http://adeeb.cf/level1/Admin/admin_category/projectors.php\" />
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
</body>
<br><br><br><br><br><br>
 <?php include ("../include/footer.php") ?>