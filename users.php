<?php 
	session_start();
	
	if (isset($_SESSION['role'])) 
	{
		if ($_SESSION['role'] != 'admin')
		 {
			if ($_SESSION['role'] != 'writer') {
				header('Location: client.php');
			}else{
				header('Location: writer.php');
			}
		}
	}
	else
	{
		header('Location: index.php');
	}

	include 'includes/dashboardHeader.php';
	require_once('./config/db.php');
	$sql = "SELECT * FROM users;";
	$q = $conn->query($sql);
	$wq = "SELECT * FROM users WHERE role='writer';";
	$qw = $conn->query($wq);
	$cq = "SELECT * FROM users WHERE role='client';";
	$qc = $conn->query($cq);

 ?>
 <div class="content">

 	<div class="container-fluid">
 		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Email</th>
		      <th scope="col">Specialization</th>
		      <th scope="col">Role</th>
		      <th scope="col"></th>
		      <th scope="col">Actions</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while ($row = $q->fetch(PDO::FETCH_OBJ)): ?>
		    <tr>
		      <th><?php echo $row->user_id; ?></th>
		      <td><?php echo $row->f_name; ?></td>
		      <td><?php echo $row->l_name; ?></td>
		      <td><?php echo $row->email; ?></td>
		      <td><?php echo $row->proffession; ?></td>
		      <td><?php echo $row->role; ?></td>
		      <td><button type="button" class="btn btn-warning">Activate</button></td>
		      <td><button type="button" class="btn btn-secondary">Edit</button></td>
		      <td><button type="button" name="delete" class="btn btn-danger">Delete</button></td>
		    </tr>
		    <?php endwhile;?>
		  </tbody>
		</table>
		<h4>Writers</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Email</th>
		      <th scope="col">Specialization</th>
		      <th scope="col">Role</th>
		      <th scope="col"></th>
		      <th scope="col">Actions</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while ($row = $qw->fetch(PDO::FETCH_OBJ)): ?>
		    <tr>
		      <th><?php echo $row->user_id; ?></th>
		      <td><?php echo $row->f_name; ?></td>
		      <td><?php echo $row->l_name; ?></td>
		      <td><?php echo $row->email; ?></td>
		      <td><?php echo $row->proffession; ?></td>
		      <td><?php echo $row->role; ?></td>
		      <td><button type="button" class="btn btn-warning">Activate</button></td>
		      <td><button type="button" class="btn btn-secondary">Edit</button></td>
		      <td><button type="button" name="delete" class="btn btn-danger">Delete</button></td>
		    </tr>
		    <?php endwhile;?>
		  </tbody>
		</table>

		<h4>Clients</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Email</th>
		      <th scope="col">Specialization</th>
		      <th scope="col">Role</th>
		      <th scope="col"></th>
		      <th scope="col">Actions</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while ($row = $qc->fetch(PDO::FETCH_OBJ)): ?>
		    <tr>
		      <th><?php echo $row->user_id; ?></th>
		      <td><?php echo $row->f_name; ?></td>
		      <td><?php echo $row->l_name; ?></td>
		      <td><?php echo $row->email; ?></td>
		      <td><?php echo $row->proffession; ?></td>
		      <td><?php echo $row->role; ?></td>
		      <td><button type="button" class="btn btn-warning">Activate</button></td>
		      <td><button type="button" class="btn btn-secondary">Edit</button></td>
		      <td><button type="button" name="delete" class="btn btn-danger">Delete</button></td>
		    </tr>
		    <?php endwhile;?>
		  </tbody>
		</table>
 	</div>
 	
 </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>