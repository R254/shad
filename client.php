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
						<li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target=".pricing-modal" href="#">Pricing</a>
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

<!-- Large modal -->

<div class="modal fade pricing-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
    	<div class="modal-header">
    		<h5 class="modal-title" id="exampleModalCenterTitle">Pricing</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
    	</div>
    	<div class="modal-body">
    	<table style="margin: 0px;" class="table">
		  <thead>
		    <tr>
		      <th scope="col">No. of words</th>
		      <th scope="col">Level 1( in Us $ )</th>
		      <th scope="col">Level 2( in Us $ )</th>
		      <th scope="col">Level 3( in Us $ )</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">Upto 200</th>
		      <td>1.10</td>
		      <td>2.50</td>
		      <td>5.50</td>
		    </tr>
		    <tr>
		      <th scope="row">201 - 300</th>
		      <td>1.80</td>
		      <td>3.50</td>
		      <td>8.00</td>
		    </tr>
		    <tr>
		      <th scope="row">301- 500</th>
		      <td>2.80</td>
		      <td>5.50</td>
		      <td>13.00</td>
		    </tr>
		    <tr>
		      <th scope="row">501 - 700</th>
		      <td>3.90</td>
		      <td>8.00</td>
		      <td>18.00</td>
		    </tr>
		    <tr>
		      <th scope="row">701 - 900</th>
		      <td>5.00</td>
		      <td>10.00</td>
		      <td>24.00</td>
		    </tr>
		    <tr>
		      <th scope="row">901 - 1000</th>
		      <td>5.50</td>
		      <td>12.00</td>
		      <td>27.00</td>
		    </tr>
		    <tr>
		      <th scope="row">1001 - 1500</th>
		      <td>8.00</td>
		      <td>17.00</td>
		      <td>39.50</td>
		    </tr>
		    <tr>
		      <th scope="row">1501 - 2000</th>
		      <td>11.00</td>
		      <td>22.00</td>
		      <td>52.00</td>
		    </tr>
		    <tr>
		      <th scope="row">2001 - 2500</th>
		      <td>13.50</td>
		      <td>28.00</td>
		      <td>65.50</td>
		    </tr>
		    <tr>
		      <th scope="row">2501 - 3000</th>
		      <td>17.00</td>
		      <td>34.00</td>
		      <td>78.00</td>
		    </tr>
		    <tr>
		      <th scope="row">3001 - 4000</th>
		      <td>22.00</td>
		      <td>44.00</td>
		      <td>104.00</td>
		    </tr>
		    <tr>
		      <th scope="row">4001 - 5000</th>
		      <td>27.00</td>
		      <td>55.00</td>
		      <td>130.00</td>
		    </tr>
		  </tbody>
		</table>
		</div>
        <div class="modal-footer">
        	<button style="border-radius: 0px;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<?php 
	require_once("includes/footer.php");

 ?>