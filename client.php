<?php

	session_start();
	
	if (isset($_SESSION['role'])) 
	{
		if ($_SESSION['role'] != 'client')
		 {
			if ($_SESSION['role'] != 'writer') 
			{
				header('Location: dashboard.php');
			}
			else{
				header('Location: writer.php');
			}
		}
	}
	else
	{
		header('Location: index.php');
	}

	require_once('./config/db.php');
	$sql = "SELECT * FROM users WHERE role = 'writer';";
	$q = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="r254developers.co.ke">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>
		Client | Get the best writing services with our experts
	</title>
	<link rel="icon" type="image/ico" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="index.php">HigherWriters</a> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> 
			</button>
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">					
						<li class="nav-item"> <a class="nav-link" href="#pricing">Pricing</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="order.php">Order Articles</a>
						</li>
						<li class="nav-item"> <button class="btn nav-btn-profile" data-trigger="focus" data-toggle="popover" title='<i class="fa fa-user"></i> title' data-placement="bottom" data-content='<a name="logout" class="btn nav-btn" href="logout.php">log Out</a>'><i class="fa fa-user"></i></button></li>				
						<li class="nav-item"> <a name="logout" class="btn nav-btn" href="logout.php">log Out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	</section>
<div class="feed">
<div class="container">
	<div class="row card-client">
		<div class="col-md-2"><br> 
			<?php echo $_SESSION['ClientUser'];?>
		</div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h5>Freelancers</h5>
				</div>
				<?php while ($row = $q->fetch(PDO::FETCH_OBJ)): ?>
				<div class="card-body">
						<div class="btn-w">
							<ul>
								<li><a href="register.php"><button class="btn nav-btn">Save</button></a></li>
								<li><a href="login.php"><button class="btn btn-c">Invite to job</button></a></li>
							</ul>
						</div>
						<a href=""><?php echo $row->f_name .' '. $row->l_name; ?></a>
						<h5>
							<?php echo $row->proffession; ?>
						</h5>
						<div class="row">
							<div class="col-md-3">
								<b>$20.0 </b>/ hr
							</div>
							<div class="col-md-3">
								<b>$10k +</b> earned
							</div>
							<div class="col-md-3">
								100% job success
							</div>
							<div class="col-md-3">
								<b><?php echo $row->country; ?></b>
							</div>
						</div>
						<p>
							<?php echo $row->description; ?>
						</p>
						<!-- <ul>
							<li>Microsoft</li>
							<li>Microsoft</li>
							<li>Microsoft</li>
							<li>Microsoft</li>
						</ul> -->
				</div>
				<hr>
				<?php endwhile;?>			
				<div class="card-footer"></div>
			</div>
		</div>
	</div>
</div>
</div>

<?php 
	require_once("includes/footer.php");

 ?>