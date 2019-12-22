  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Home Shopping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="../Admin/index.php">Admin</a>
          </li>
          
<?php 
  if(!isset($_SESSION['user_email'])){
 ?>
          <li class="nav-item">
            <a class="nav-link" href="../category/login.php">login</a>
          </li>
        <?php } else { ?>
           <li class="nav-item">
              <li class="nav-item">
            <a class="nav-link" href="../category/logout.php">Logout</a>
          </li>
        <?php } ?>
          <li class="nav-item">
              <li class="nav-item">
            <a class="nav-link" href="../category/signup.php">sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../meetme/about-us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./review.php">Reviews</a>
          </li>
     <?php 
          if(isset($_SESSION['user_name'])){
                        $name=$_SESSION['user_name'];
   ?>


               <li class="nav-item">
            <a class="nav-link " href="../cart/addtocart.php"><span class="fa fa-shopping-cart"></span> Cart</a>
          </li>
               <li class="nav-item">
            <a class="nav-link " href="../cart/addtowishlist.php"><span class="fa fa-heart"></span>  Wishlist</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#"><span class="fas fa-user-circle fa-fw"></span>  <?php echo $name ?></a>
          </li>



        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
