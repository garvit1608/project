<?php
include '../include/connection.php';

$db=new Database();
$db->connect();
      
      $flag=0;

      $us_name=$_GET['usname'];
      $pwd=md5($_GET['passwd']);
      $fname=$_GET['fname'];
      $email=$_GET['email'];
      $us_type=$_GET['tou'];
      $reg=$_GET['reg'];
      if($us_type=="PC")
      {
        $confirm=$db->run_query("SELECT * from faculty");
        while ($row=mysqli_fetch_array($confirm)) {

          if($reg==$row['staff_id'])
          {
            $flag=1;
            break;
          }
          # code...
        }
        if($flag==1)
        {

          $confirm= $db->run_query("INSERT INTO user_detail values('$us_name','$pwd','$email','$fname','$us_type','$reg')");
          if(!empty($confirm))

       { echo "<div class='alert alert-success' role='alert'>successfully registered</div>";
       echo "<script>
             if(flag==0)
             {
                  $('#box').hide();
             }                 
             </script>";
       }
      else
      echo  "<div class='alert alert-danger' role='alert'>Username already exist</div>";

        }
        else
           echo  "<div class='alert alert-danger' role='alert'>Not a valid project Coordinator</div>";

      }
      else
      {
    $confirm= $db->run_query("INSERT INTO user_detail values('$us_name','$pwd','$email','$fname','$us_type','$reg')");
      if(!empty($confirm))
     { echo "<div class='alert alert-success' role='alert'>successfully registered</div>";
       echo "<script>
             if(flag==0)
             {
                  $('#box').hide();
             }                 
             </script>";
       }
      else
      echo  "<div class='alert alert-danger' role='alert'>Username already exist!</div>";
  }

      $db->disconnect();
?>
