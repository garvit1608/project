<?php
 //include '../include/connection.php';
  $db->connect();

  $query="SELECT * from pc_db";
  $result=$db->run_query($query);
  echo "<select class='form-control' name='prjname'>";
  while($row=mysqli_fetch_array($result))
  {
  	if($row['flag']!=1)
  	echo "<option>".$row['prj_name']."</option>";

  }
  echo "</select>";



?>