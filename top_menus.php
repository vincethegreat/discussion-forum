<?php if(!empty($_SESSION['userid']) && $_SESSION['userid']) { ?>		
<h3><a href="category.php">Home</a> | Logged in : <?php echo ucfirst($_SESSION["name"]); ?> | <a href="logout.php">Logout</a> | <a href="cp_login.php"  target="_blank" class="pull-right">Control Panel</a>	
</h3>
<?php } else { ?>
<h3><a href="category.php">Home</a> | <a href="login.php">Login</a> | <a href="cp_login.php">Control Panel</a></h3>
<?php } ?>	
<center>
		<footer class="main-footer">
		<strong>Copyright &copy; 2020 <a href="https://pornhub.com" target="_blank">John David Gingo, Ryan Carrilo.
		<div class="float-right d-none d-sm-inline-block">
		<b>Discussion Forum</b>
		</div>
	</footer>
	</center>