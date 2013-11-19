<?php 
	$userrole = array('root', 'admin', 'customer');
	include ("security.php"); 
?>
<h3>Customer homepage</h3>
Uw id is: <?php echo $_SESSION['id']; ?><br>
Uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>