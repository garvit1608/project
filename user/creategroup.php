<?php
include '../include/connection.php';
$db=new Database();
$db->connect();
$mail1=$_GET['mem1'];
$mail2=$_GET['mem2'];
$mail3=$_GET['mem3'];
$mail4=$_GET['mem4'];
$prj=$_GET['prjname'];

$query="INSERT into group_list values('$prj','$mail1','$mail2','$mail3','$mail4')";
$result=$db->run_query($query);

if(!empty($result))
{
echo "group created";

$query="UPDATE pc_db set flag='1' where prj_name='$prj'";
$result=$db->run_query($query);

}

?>