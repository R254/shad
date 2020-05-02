<?php
	
	session_start();
	require_once("includes/users-header.php");

	if (isset($_SESSION['user'])) 
	{
		if ($_SESSION['user'] != 'writer')
		 {
			header('Location: client.php');
		}
	}
	else
	{
		header('Location: index.php');
	}

	require_once('./config/db.php');
	$sql = "SELECT * FROM projects;";
	$q = $conn->query($sql);

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