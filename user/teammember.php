<?php

$db->connect();
 $prname=$_SESSION['prjname'];
// echo "<script>alert('$prname')</script>";
$query="SELECT * from group_list where prj_name='$prname'";
 $result=$db->run_query($query);
 $result=mysqli_fetch_array($result);
 $db->disconnect();

 ?>
 <div class="form-group">
  <label for="sel1">Group Member</label>
 <select class="form-control" id="member">
 	<option><?php echo $result['mail1']; ?></option>
 	<option><?php echo $result['mail2']; ?></option>
 	<option><?php echo $result['mail3']; ?></option>
 	<option><?php echo $result['mail4']; ?></option>
 </select>
</div>