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

 ?>
 <div class="content">

 	<h2>
 		Users control
 	</h2>
 	
 </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>