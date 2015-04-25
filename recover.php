<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<?php
include 'include/connection.php';
$email=$_GET['mail'];
$db=new Database();
$db->connect();
$newpwd=md5("user@123");
$query="UPDATE user_detail set pwd='$newpwd' where email='$email'";

$result=$db->run_query($query);

if(empty($result))
{
	?>
	<div class='alert alert-danger' role='alert'>
	email not registered
</div>
<?php
}

else
{
	$msg="your new password is user@123";
	mail("garvit1608@gmail.com", "password reset",$msg);
	?>
	
      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-4">
          	<div class='alert alert-success' role='alert'>Please Check Your Mail</div>
          	<button class="btn btn-success" onclick="window.location.href='index.html'">Log In </button>
          	    
    </div>
    <div class="col-lg-3"></div>
    </div>
  </div>
  
  <?php
}

$db->disconnect();

?>

</body>
</html>