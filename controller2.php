<?php

session_start();

require "Vues\\passager.html";
require "PassengerModel.php";
require "ReservationModel.php";


$reservation = new Reservation($_POST['destination'], $_POST['nombre'], isset($_POST['insurance']));

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
