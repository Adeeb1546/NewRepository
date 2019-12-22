 <?php include("include/header.php");?>
 <?php include("include/database.php"); ?>
<?php include("include/navigation.php"); ?>

<?php 
	if(!isset($_SESSION['user_email'])){
		header("Location: ../../login.php");
	}else{
      echo "      <meta http-equiv = \"refresh\" content = \"0; url = http://localhost/level1/index.php\" />
";
}
 ?>


  
<br><br><br><br><br><br>
  <?php include ("include/footer.php") ?>