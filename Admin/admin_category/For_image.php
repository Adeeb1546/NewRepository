       
                     <input type="file" name="image" >
                     <button type="submit" name="upload">POST</button>
             <?php

                      

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
       if(isset($_FILES['image'])){
    echo  $_FILES['image']['tmp_name'];

    // Get image name
     $image = $_FILES['image']['name'];

    // image file directory
     $target = "images/".basename($image);


   echo  $sql = "INSERT INTO items(item_image) VALUES ('$image')";
    // execute query
    $result= mysqli_query($conn, $sql);
    if($result){
      echo "ok";
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