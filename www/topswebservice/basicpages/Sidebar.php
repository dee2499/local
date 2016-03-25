	<?php session_start();?>
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
			<?php if(!isset($_SESSION['c_email'])){ ?>
		<h3>Registration</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="Registration.php">Register as buyer</a></li>
			<li class="icn_view_users"><a href="../saller/registeration.php">Register as merchant</a></li>
			
		</ul>
			<?php }else{?>
			
			<h3>Transaction</h3>
		<ul class="toggle">
		
			<li class="icn_tags"><a href="../customer/currentBalance.php">View Current Balance</a></li>
			<li class="icn_categories"><a href="../customer/recentTransaction.php">View Recent Transaction</a></li>
			
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			
			<li class="icn_view_users"><a href="#">Change Password</a></li>
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>
			
			<?php } ?>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
