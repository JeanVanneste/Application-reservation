<?php

//session_start();

require "Models\PassengerModel.php";
require "Models\ReservationModel.php";
require "Vues\\passager.html";

if (isset($_POST['destination']) && ($_POST['nombre']>=0))
{
	$reservation = new Reservation($_POST['destination'], $_POST['nombre'], isset($_POST['insurance']));
}
else 
{
	echo "Veuillez remplir les champs obligatoire !";
}



echo $reservation->id;

/* Test

echo $reservation->destination." ";
echo $reservation->seatTotal." ";
if ($reservation->insurance)
{
	echo "true";
}
else
{
	echo "false";
}

*/

?>
