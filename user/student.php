<html>

<body>
  
  <style>
    label
    {
      margin-bottom: 1px;
      
    }
    </style>

<div class="container-fluid">
	<div class="row">
		<h1>Student</h1>
	</div>
	<div class="row">
		<div class="col-md-4" style="padding-top:70px;">
      
		<center>	<img class="img-responsive" style="width:200px;height:200px;border-radius:100%;" src="user/me.gif"> </center>
       <div class="row" style="margin-bottom:50px;"></div>
			<ul class="list-group" style="width:260px;"> 
				<li class="list-group-item">Name :<?php echo $_SESSION['user']; ?>
				<li class="list-group-item">Dept :<?php echo $_SESSION['dept']; ?>
				<li class="list-group-item">Reg No : <?php echo $_SESSION['regno']; ?>
			</ul>
		<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>
		</div>
		<div class="col-md-4" style="padding-top:300px;">
			<?php
			include 'user/student_prj.php';

			?>
		</div>
		<div class="col-md-4">
      <button class="btn btn-primary" style="margin-left:150px;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Create Group
</button>
<div class="collapse" id="collapseExample">
			<form class="form-horizontal" action="user/creategroup.php" method="get">
				 <div class="form-group">
                                  <label for="projectname" class="control-label">Project Name</label>
                                  <div>
                                     <?php include 'projectlist.php'; ?>
                                  </div>
                              </div>
                    <div class="form-group">
                                  <label for="username" class="control-label">Member 1 </label>
                                  <div >
                                      <input type="email" class="form-control" name="mem1" placeholder="Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Member 2</label>
                                  <div >
                                      <input type="email" class="form-control" name="mem2"  placeholder="Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Member 3</label>
                                  <div >
                                      <input type="email" class="form-control" name="mem3" placeholder="Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Member 4</label>
                                  <div >
                                      <input type="email" class="form-control" name="mem4" placeholder="Email">
                                  </div>
                              </div>

                              <input type="submit" class="btn btn-primary">


			</form>
      </div>
		</div>
	</div>
</div>
<script>


</script>

