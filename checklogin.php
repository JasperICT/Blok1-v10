<?php
	//Check of beide velden zijn ingevoerd
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		include('./connect_db.php');
		$query = "SELECT * 
				  FROM `users` 
				  WHERE `email`    = '".$_POST['email']."'
				  AND   `password` = '".$_POST['password']."'";
		//echo $query;
		//Vuur de query af op de database
		$result = mysql_query($query, $db);
		if (mysql_num_rows($result) > 0)
		{
			//Verwijs door naar de homepage van de geregistreerde gebruiker
			//echo "Record bestaat in de database";
			$record = mysql_fetch_array($result);
			$_SESSION['id'] = $record['id'];
			$_SESSION ['userrole']  = $record['userrole'];
			header("location:index.php?content=downloadpage");
		}
		else
		{
			//Blijkbaar is het record niet gevonden in de database
			echo "De ingevoerde combinatie van gebruikersnaam - wachtwoord is ons niet bekend. U wordt 	doorgestuurd naar de inlogpagina";
			header("refresh:4; url=index.php?content=login_form");
		}		
	}
	else
	{
		echo 'U heeft beide of een van beide velden niet ingevuld. 
			  U wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}

?>
