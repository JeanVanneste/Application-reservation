<?php

session_start();

require "..\Vues\\passager.html";
require "..\Models\PassengerModel.php";
require "..\Models\ReservationModel.php";

if (isset($_POST['destination']) && isset($_POST['nombre']))
{
	echo "1";
	$reservation = new Reservation($_POST['destination'], $_POST['nombre'], isset($_POST['insurance']));
}
else 
{
	echo "Veuillez remplir les champs obligatoire !";
}
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
