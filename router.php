<?php

session_start();

if (isset ($_POST['routeNext']))
{
	$routeNext = $_POST['routeNext'];
}


if (isset($routeNext))
{
	switch ($routeNext)
	{
		case "newReservation" :
			require "Controllers\controllerReservation.php";
			break;
		case "newPassenger":
			require "Controllers\controllerPassenger.php";
			break;
		default :
			require "error.html";
	}

	//require "Controllers\controllerReservation.php";
}
else
{
	require "Vues\home.php";
}

?>