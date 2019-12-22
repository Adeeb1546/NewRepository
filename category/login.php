<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <?php include("include/navigation.php"); ?>

<?php 
  if(isset($_SESSION['user_email'])){
    header("Location: ../index.php");
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
               <div class="alert alert-dark"> login </div>
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post">
               	<?php
                  if (isset($_POST["login"])) {
                      $myuseremail = mysqli_real_escape_string($conn,$_POST['email']);
                    $user_password = mysqli_real_escape_string($conn,$_POST['password']);
                    $user_password = md5($user_password);

                    $sql = "SELECT * FROM `user` WHERE `user_email` = '$myuseremail' AND `user_password` = '$user_password'";
                      $result = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($result);
                        if($count == 1) {
                           if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
                           {
                                 $secret = '6LeQ_ZcUAAAAADs9wzcD9Q5znDjwHDphXdQQ8SPU';
                                 $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                                 $responseData = json_decode($verifyResponse);
                                 if($responseData->success)
                                 {
                                                $succMsg = 'Your contact request have submitted successfully.';
                                                $result = mysqli_query($conn,"SELECT `user_email` , `user_name`,`status` from `user` WHERE user_email = '$myuseremail' AND `user_password` = '$user_password' ");
                                       $row = mysqli_fetch_array($result);
                                       $status = $row['status'];
                                       $login_session = $row['user_email'];
                                       $login_session_name = $row['user_name'];
                                                $_SESSION['user_email'] = $login_session;	
                                       $_SESSION['user_name'] = $login_session_name;
                        
                                       
                                          if($status == 'admin'){
                                          $_SESSION['status'] = $status; 
                                    header("location: ../Admin/index.php");  
                                          }
                                          else if($status == 'user') {
                                             header("location: ../index.php");
                                             }else{
                                                header("location: ../index.php");
                                             }
                                       die();
                                 }
                                 }
                                 else
                                 {
                                      $errMsg = 'Robot verification failed, please try again.';
                                     echo "<div class='alert alert-danger'>$errMsg</div>";
                                    //  echo "<meta http-equiv = \"refresh\" content = \"0; url = https://adeeb.cf/level1/category/login.php />";
                                    // //  die();
                                 }
                            }else {
                              echo "<center><h1><div class='alert alert-danger'>Email or password wrong!</div></h1><c/enter>";
                           }
        					 
   
                        }
                        
                    
  
                  ?>
                 
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" required="">
                  </div>
                   <div class="form-group">
                     <input type="password" name="password"  class="form-control my-input" id="password" placeholder="Password" required="">
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LeQ_ZcUAAAAAIimmeRfMWZWGhOl0_2Y-aDPB-5z" required=""></div>
                     <br/>
                  <div class="text-center ">
                     <button type="submit" name="login" class=" btn btn-block send-button tx-tfm">Login</button>
                  
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <a class="btn btn-block g-button" href="#">
                     <i class="fa fa-google"></i> Sign up with Google
                     </a>
                  </div>
                  <p class="small mt-3"> <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<br><br><br><br><br><br><br>
   <?php include ("include/footer.php") ?>