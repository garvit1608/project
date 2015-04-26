<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style type="text/css">
label
{
	margin-bottom: 0px;

}
	</style>

</head>

<body>
	<?php 
	session_start();
	include '../include/connection.php';
	$db=new Database();

	?>
<div class="container-fluid">
  <div class="row">
    <h2>Team Page</h2>
  </div>
  <hr class="featurette-divider">
	<div class="row">
	<div class="col-md-3">
		<div class="lead">Tasks</div>
		<form>

			 <div class="form-group">
                                  <label for="username" class="col-md-6 control-label">Task Name</label>
                                  <div >
                                      <input type="text" class="form-control" id="taskname" placeholder="User Name" required>
                                  </div>
                              </div>
             <div class="form-group">
                                  <label for="username" class="col-md-8 control-label">Task Desription</label>
                                  <div >
                                      <textarea class="form-control" rows="4" cols="6" id="taskdesc"></textarea>
                                  </div>
                              </div>
             <div class="form-group">
                                
                                  <div >
                                    <?php include 'teammember.php'; ?>
                                  </div>
                              </div>
                      <div class="form-group">
                                <label for="username" class="col-md-8 control-label">Task Deadline</label>
                                  <div >
                                   <input type="date" class="form-control" id="taskdate">
                                  </div>
                              </div>
                           
		</form>	
		<button class="btn btn-primary" onclick="formsubmit()">Create Task</button>
		<div id="myDiv"></div>
    <button class="btn btn-success" onclick="window.location.assign('../logout.php')" style="margin-top:50px;">Log Out</button>

	</div>
  <div class="col-md-3">

    <div class="lead">Members</div>

    <?php include 'display_members.php'; ?>
    


  </div>
	<div class="col-md-6">
		<div class="lead">
			Timeline
		</div>
		<?php include 'taskdesc.php'; ?>
	</div>
	
</div>
</div>
<script type="text/javascript">
function formsubmit () {
	// body...
	var tsk=document.getElementById('taskname').value;
	var tskdesc=document.getElementById('taskdesc').value;
	var tskdt=document.getElementById('taskdate').value;
	var tskmem=document.getElementById('member').value;
	var xmlhttp;
  if(tsk=='' || taskdesc=='' || tskdt=='' || tskmem=='')
  {
    alert('please fill all the fields');

  }
  else
  {
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  //alert('here');
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    setTimeout(function(){window.location.reload(true)},5000);

    }
  }


//alert(fname+passwd+email+usname);
var d="../register/task.php?taskname="+tsk+"&taskdesc="+tskdesc+"&taskdate="+tskdt+"&taskmem="+tskmem;
//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.open("GET",d,true);
xmlhttp.send();


}
}

</script>




</body>
</html>