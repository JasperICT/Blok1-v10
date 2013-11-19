<ul>
	<li>
		<a href="index.php?content=homepage">home</a>
	</li>
	<li>
		<a href='index.php?content=hallo'>hallo</a>
	</li>
	<?php
		if ( isset($_SESSION['userrole']))
		{
			echo"<li>
				 <a href='index.php?content=logout'>uitloggen</a>
				 </li>";
		}	
		else
		{
			echo "<li>
				 <a href='index.php?content=login_form'>inloggen</a>
				 </li>
				 <li>
				 <a href='index.php?content=register_form'>registratie</a>
				 </li>";
		}
		
	?>
</ul>