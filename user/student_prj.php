
<table class="table table-bordered" id="prjtable">
  <tr>
    <td class="lead">Group Id</td>
    <td class="lead"> Project Name</td>
  </tr>

<?php
   $db->connect();
   $usid=$_SESSION['user'];

   $query="SELECT email from user_detail where username='$usid'";
   $result=$db->run_query($query);
   $email_id=mysqli_fetch_array($result);
    
   $query = "SELECT * from group_list";

   $result=$db->run_query($query);
   while ($row=mysqli_fetch_array($result)) {

   if($row['mail1']==$email_id['email'] || $row['mail2']==$email_id['email'] || $row['mail3']==$email_id['email']|| $row['mail4']==$email_id['email'])
   {
     $project=$row['prj_name'];
     $query="SELECT group_id from pc_db where prj_name='$project'";

   $result=$db->run_query($query);

   $gpid=mysqli_fetch_array($result);

   $_SESSION['prjname']=$project;
   
  
   
  ?>
    <tr>
      <?php
     
      echo "<td>".$gpid['group_id']."</td>";
       echo "<td>".$project."</td>";

     
     ?>
   </tr>
   <?php
 }
 else
  echo "<script>alert('You are not involved in any project')</script>";
}
   

    $db->disconnect();


?>
</table>