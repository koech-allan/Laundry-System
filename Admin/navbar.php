
<style>
	
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span>Dashboard</a>
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span>Dashboard</a>
				<a href="index.php?page=laundry" class="nav-item nav-lsundry"><span class='icon-field'><i class="fa fa-list"></i></span> Laundry Requests</a>
					
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-boxes"></i></span> Manage Laundry Prices</a>
				

				
				<a href="index.php?page=reports" class="nav-item nav-reports"><span class='icon-field'><i class="fa fa-th-list"></i></span> Reports</a>	
				<a href="logout.php?action= logout"class="nav-item nav-logout"><i class="fa fa-th-list"></i></span> Logout</a>				
				
				<?php if($_SESSION): ?>
			<?php endif; ?>
		
				
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
<?php if($_SESSION['login_type'] == 2): ?>
	<style>
		.nav-sales ,.nav-users{
			display: none!important;
		}
	</style>
<?php endif ?>