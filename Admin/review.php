

  <?php include("include/header.php");?>

<?php 
if(!isset($_SESSION['status'])){
  header("Location: ../index.php");
}
 ?>

 
<?php include("include/navigation.php"); ?>
  
  <?php 
 ?>
  <div class="container">
      
    <div class="row">

      <div class="col-sm-3">
      <?php include("include/category.php"); ?>
   
       
      </div>
      <div class="col-sm-9">
      <h1><div class="btn btn-primary">Reviews </div></h1>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                <tr>
                <th >#</th>
              <th >username</th>
              <th >O.Email</th>
               <th >E.Email</th>
              <th >Reviews</th>
              
             

                </tr>
                </thead>
                <tbody>
     
                                    <?php 
         $sql = "SELECT * from  `review` inner join user on review.user_id = user.user_id ";
        $result = mysqli_query($conn , $sql);
       $counter = 0;
          while($row = mysqli_fetch_array($result)) {
           $counter++; 
           $user_name = $row['user_name'];
           $user_email = $row['user_email'];
           $user_emaill = $row['user_emaill'];
           $Reviews = $row['review'];
         
        ?>  
  
   
                <tr>
      
            <td ><?php  echo $counter;?>           </td>    
           <td ><?php   echo $user_name;?>         </td> 
           <td ><?php   echo $user_email;?>        </td>
            <td ><?php   echo $user_emaill;?>        </td>
           <td ><?php   echo $Reviews;?>           </td>
             
          
                </tr>
                </tbody>
                 <?php   } ?>
                </table>
                 </div>
               </div>
            
  </div>
 </div>
</div>
</div>
<br><br><br><br><br><br>
  <?php include ("include/footer.php") ?>