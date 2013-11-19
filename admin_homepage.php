<?php
	if (!isset($_SESSION['id']))
	{
		echo "U bent niet ingelogd en daarom niet bevoegd om deze pagina te bekijken";
		header("refresh:4;url=index.php?content=homepage");
		exit();
	}
?>
<h3>Administrator homepage</h3>
Uw id is: <?php echo $_SESSION['id']; ?><br>
Uw gebruikersrol is <?php echo $_SESSION['userrole']; ?>