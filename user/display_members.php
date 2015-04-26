<?php
 $prname=$_SESSION['prjname'];
 $db->connect();

 $query="SELECT * from group_list where prj_name='$prname'";
 $result=$db->run_query($query);
 $result=mysqli_fetch_array($result);
 $db->disconnect();
 ?>
 <ul class="list-group">
 	<li class="list-group-item"><?php echo $result['mail1'] ; ?>
    <li class="list-group-item"><?php echo $result['mail2'] ; ?>
    <li class="list-group-item"><?php echo $result['mail3'] ; ?>
    <li class="list-group-item"><?php echo $result['mail4'] ; ?>
 </ul>
