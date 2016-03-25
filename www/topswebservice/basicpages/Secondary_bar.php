<?php session_start(); ?>

	<section id="secondary_bar">
		<div class="user">
		
			<?php if(isset($_SESSION['c_email'])){ ?>
			<p><?php echo $_SESSION["c_email"]; ?>(<a href="#">3 Transcation</a>)</p>
						
			<?php }else {?> 	<p><a href="login.php">Login</a></p>	<?php } ?>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	