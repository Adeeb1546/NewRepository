<?php include("include/header.php");?>
<?php include("include/database.php"); ?>
  <?php include("include/navigation.php"); ?>
  <script type="jquery.js"></script>
<script type="js/bootstrap.js"></script>

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
                <div class="alert alert-dark">Create an account </div>
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post">

                  <?php   

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
                  if (isset($_POST["signup"])) {
                      $user_name = $_POST['name'];
                      $user_password = $_POST['password'];
                      $user_password = md5($user_password);
                       $user_email = $_POST['email'];
                        $user_phone= $_POST['phone'];

                       $sql1 = "SELECT  * from  `user` WHERE `user_email` = '$user_email' ";
                        $result = mysqli_query($conn , $sql1);
       
                      if(mysqli_num_rows($result) > 0){
                         
                         echo "<center><h1><div class='alert alert-success'>User exist with this email!</div></h1><c/enter>";
                      }else{

                   
                        $sql = "INSERT INTO `user` (`user_name`,`user_password`,`user_email`,`user_phone`,`status`) VALUES ('$user_name','$user_password','$user_email','$user_phone','user')";
                        if ($conn->query($sql) === TRUE) {
                             echo "<center><h1><div class='alert alert-success'>New user Added!</div></h1><c/enter>";
                                  echo "      <meta http-equiv = \"refresh\" content = \"1; url = https://adeeb.cf/level1/category/login.php\" />";
                            //$_SESSION = $user_name;
                           } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                           }
                  }
                }
  
                  ?>
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name" required="">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" minlength="6" maxlength="12" class="form-control my-input" id="password" placeholder="Password" required="">
                      <div class="float-right">
                      <button type="button" name="show_password" id="show_password" class="form-control" >show</button>
                    </div>
                  </div>
                  <div class="form-group">
                     <input type="email" name="email" class="form-control my-input" id="email" placeholder="Email" required="">
                  </div>
                  <div class="form-group">
                     <input type="number" name="phone" id="phone"  class="form-control my-input" placeholder="Phone 03XXXXXXXX" required="">
                  </div>
                  <div class="text-center ">
                     <button type="submit" name="signup" class=" btn btn-block send-button tx-tfm">Create Your Free Account</button>
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
                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<script >
     $(document).ready(function(){
      $('#show_password').on('click',function(){
        var passwordField = $('#password');
        var passwordFieldType = passwordField.attr('type');
        if(passwordFieldType == 'password'){
          passwordField.attr('type','text');
          $(this).text('Hide');

        }else{
          passwordField.attr('type','password');
          $(this).text('show');
        }
      });
     });
   </script>
 <?php include ("../include/footer.php") ?>