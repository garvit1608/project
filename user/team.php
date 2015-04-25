<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>

<body>
	

<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
		<div class="lead">Tasks</div>
		<form>

			 <div class="form-group">
                                  <label for="username" class="col-md-3 control-label">Task Name</label>
                                  <div >
                                      <input type="text" class="form-control" name="mem4" placeholder="User Name">
                                  </div>
                              </div>
             <div class="form-group">
                                  <label for="username" class="col-md-3 control-label">Task Desription</label>
                                  <div >
                                      <textarea class="form-control" rows="4" cols="6"></textarea>
                                  </div>
                              </div>
             <div class="form-group">
                                  <label for="username" class="col-md-3 control-label">Member</label>
                                  <div >
                                    <?php include 'teammember.php'; ?>
                                  </div>
                              </div>
		</form>	

	</div>
	<div class="col-md-6">
		<div class="lead">
			Timeline
		</div>

	</div>
	<div class="col-md-4">

		<div class="lead">Members</div>

		<?php include 'display_members.php'; ?>
		


	</div>
</div>
</div>




</body>
</html>