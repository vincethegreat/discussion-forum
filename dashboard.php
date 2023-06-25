<?php 
include_once 'config/Database.php';
include_once 'class/Owner.php';

$database = new Database();
$db = $database->getConnection();

$owner = new Owner($db);
if(!$owner->loggedIn()) {	
	header("Location: cp_login.php");	
}
include('inc/header.php');
?>
<title>Discussion Forum</title>
<link rel="stylesheet" href="css/style.css">
<?php include('inc/container.php');?>
<div class="container"> 	
	<?php include('menus.php'); ?>
	<h2>Welcome to the control Panel</h2>
</div>
<center>
		<footer class="main-footer">
		<strong>Copyright &copy; 2020 <a href="https://pornhub.com" target="_blank">John David Gingo, Ryan Carrilo.
		<div class="float-right d-none d-sm-inline-block">
		<b>Discussion Forum</b>
		</div>
	</footer>
	</center>
<?php include('inc/footer.php');?>