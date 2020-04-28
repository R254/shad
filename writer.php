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
				<div class="card-body">
					<h4><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h4>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, labore odit. Omnis, itaque laudantium ad et molestias sint doloribus facilis similique exercitationem, provident fugit voluptas quia ea. Error deleniti magni impedit nihil similique. Suscipit, sint obcaecati a veniam expedita qui hic esse, optio aspernatur amet, cupiditate illum ipsam perspiciatis quibusdam voluptatum quisquam nesciunt distinctio fuga eaque ratione animi reprehenderit! Iure harum quas reiciendis esse perferendis enim, atque saepe dolorum iusto quo impedit dolores, fuga sequi, sapiente vitae provident veniam! Laudantium, distinctio deserunt. Aut eaque atque quod quasi laborum fugit facere. Obcaecati exercitationem rem aliquam quia sit qui quas nesciunt, ipsa facere quae. Magni corporis tempora mollitia quaerat eligendi laboriosam, error sapiente deleniti tempore itaque in placeat facere cupiditate? 
						<span>more</span>
					</p>
				</div>
				<hr>
				<div class="card-body">
					<h4><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h4>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, labore odit. Omnis, itaque laudantium ad et molestias sint doloribus facilis similique exercitationem, provident fugit voluptas quia ea. Error deleniti magni impedit nihil similique. Suscipit, sint obcaecati a veniam expedita qui hic esse, optio aspernatur amet, cupiditate illum ipsam perspiciatis quibusdam voluptatum quisquam nesciunt distinctio fuga eaque ratione animi reprehenderit! Iure harum quas reiciendis esse perferendis enim, atque saepe dolorum iusto quo impedit dolores, fuga sequi, sapiente vitae provident veniam! Laudantium, distinctio deserunt. Aut eaque atque quod quasi laborum fugit facere. Obcaecati exercitationem rem aliquam quia sit qui quas nesciunt, ipsa facere quae. Magni corporis tempora mollitia quaerat eligendi laboriosam, error sapiente deleniti tempore itaque in placeat facere cupiditate? 
					</p>
				</div>
				<hr>
				<div class="card-body">
					<h4><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h4>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, labore odit. Omnis, itaque laudantium ad et molestias sint doloribus facilis similique exercitationem, provident fugit voluptas quia ea. Error deleniti magni impedit nihil similique. Suscipit, sint obcaecati a veniam expedita qui hic esse, optio aspernatur amet, cupiditate illum ipsam perspiciatis quibusdam voluptatum quisquam nesciunt distinctio fuga eaque ratione animi reprehenderit! Iure harum quas reiciendis esse perferendis enim, atque saepe dolorum iusto quo impedit dolores, fuga sequi, sapiente vitae provident veniam! Laudantium, distinctio deserunt. Aut eaque atque quod quasi laborum fugit facere. Obcaecati exercitationem rem aliquam quia sit qui quas nesciunt, ipsa facere quae. Magni corporis tempora mollitia quaerat eligendi laboriosam, error sapiente deleniti tempore itaque in placeat facere cupiditate? 
					</p>
				</div>
				<hr>
				<div class="card-body">
					<h4><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h4>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, labore odit. Omnis, itaque laudantium ad et molestias sint doloribus facilis similique exercitationem, provident fugit voluptas quia ea. Error deleniti magni impedit nihil similique. Suscipit, sint obcaecati a veniam expedita qui hic esse, optio aspernatur amet, cupiditate illum ipsam perspiciatis quibusdam voluptatum quisquam nesciunt distinctio fuga eaque ratione animi reprehenderit! Iure harum quas reiciendis esse perferendis enim, atque saepe dolorum iusto quo impedit dolores, fuga sequi, sapiente vitae provident veniam! Laudantium, distinctio deserunt. Aut eaque atque quod quasi laborum fugit facere. Obcaecati exercitationem rem aliquam quia sit qui quas nesciunt, ipsa facere quae. Magni corporis tempora mollitia quaerat eligendi laboriosam, error sapiente deleniti tempore itaque in placeat facere cupiditate? 
					</p>
				</div>
				<hr>
				<div class="card-body">
					<h4><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h4>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, labore odit. Omnis, itaque laudantium ad et molestias sint doloribus facilis similique exercitationem, provident fugit voluptas quia ea. Error deleniti magni impedit nihil similique. Suscipit, sint obcaecati a veniam expedita qui hic esse, optio aspernatur amet, cupiditate illum ipsam perspiciatis quibusdam voluptatum quisquam nesciunt distinctio fuga eaque ratione animi reprehenderit! Iure harum quas reiciendis esse perferendis enim, atque saepe dolorum iusto quo impedit dolores, fuga sequi, sapiente vitae provident veniam! Laudantium, distinctio deserunt. Aut eaque atque quod quasi laborum fugit facere. Obcaecati exercitationem rem aliquam quia sit qui quas nesciunt, ipsa facere quae. Magni corporis tempora mollitia quaerat eligendi laboriosam, error sapiente deleniti tempore itaque in placeat facere cupiditate? 
					</p>
				</div>
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