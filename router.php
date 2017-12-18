<?php

session_start();

//require "Vues\\home.html";



if (isset($new))
{
	require "Controllers\controllerReservation.php";
}
else
{
	require "Vues\home.php";
	if (isset($new)){echo $new;}
}

?>
