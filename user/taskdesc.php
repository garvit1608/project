<table class="table table-bordered">
	<tr>
		<th>Task Name</th>
		<th>Description</th>
		<th>Member</th>
		<th>Deadline</th>
	</tr>

<?php

 $db->connect();
 $prj=$_SESSION['prjname'];
 $query="SELECT * from task where prj_name='$prj'";
 $result=$db->run_query($query);
 while ($row=mysqli_fetch_array($result)) {
 	echo "<tr>";
 	echo "<td>".$row['task_name']."</td>";
 	echo "<td>".$row['task_desc']."</td>";
 	echo "<td>".$row['task_mem']."</td>";
 	echo "<td>".$row['task_dt']."</td>";
 	echo "</tr>";
 }

?>