<?php
	
	session_start();
	if (isset($_SESSION['role'])) 
	{
		if ($_SESSION['role'] != 'writer')
		 {
			if ($_SESSION['role'] != 'client') 
			{
				header('Location: dashboard.php');
			}
			else{
				header('Location: client.php');
			}

		}
	}
	else
	{
		header('Location: index.php');
	}

	require_once('./config/db.php');
	$sql = "SELECT * FROM projects;";
	$q = $conn->query($sql);

	require_once("includes/users-header.php");

?>


<div class="feed">
<div class="container">
	<div class="row">
		<div class="find-w col-md-2"><br>
			<h3>Find work</h3>
		</div>
		<div class="col-md-8">
			<input type="search" class="search form-control" name="search" placeholder ="search for a job">
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h4>My Feeds</h4>
					</div>
					<?php while ($row = $q->fetch(PDO::FETCH_OBJ)): ?>
					<div class="card-body">
						<div class="btn-w">
							<ul>
								<li><a href="register.php"><button class="btn nav-btn">Save</button></a></li>
								<li><a href="login.php"><button class="btn btn-c">Invite to job</button></a></li>
							</ul>
						</div>
							<h4><a href=""><?php echo $row->title; ?></a></h4> <span><?php echo $row->date_posted; ?></span>
							<p>
								<?php echo $row->body; ?>
							</p>
					</div>
					<hr>
					<?php endwhile;?>			
					<div class="card-footer"></div>
				</div>
			</div>
		<div class="col-md-2">
			<img src=""><h5>My Profile</h5>
			<p><?php echo $_SESSION['WriterUser'];?></p>
		</div>
	</div>
</div>
</div>





<?php 
	require_once("includes/footer.php");
 ?>