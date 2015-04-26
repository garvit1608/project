<?php
 	session_start();
 	$task=$_GET['taskname'];
 	$taskdesc=$_GET['taskdesc'];
 	$date=$_GET['taskdate'];
 	$mem=$_GET['taskmem'];
 	$prj=$_SESSION['prjname'];

 	include '../include/connection.php';
 	$db=new Database();
 	$db->connect();
 	$query="INSERT into task values('$task','$taskdesc','$mem','$date','$prj')";
 	$result=$db->run_query($query);
 	if(!empty($result))
 	{
 		 echo  "<div class='alert alert-success' role='alert'>Task Created!</div>";
 	}
 	else
 	{
 		 echo  "<div class='alert alert-danger' role='alert'>Task already exists!</div>";
 	}
  $db->disconnect();
 
?>