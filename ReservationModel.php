<?php 

class Reservation
{
	public $destination;
	public $seatTotal;
	public $insurance;
	public $passengers;

	function __construct($destination, $seatTotal, $insurance)
	{
		$this->destination = $destination;
		$this->seatTotal = $seatTotal;
		$this->insurance = $insurance;
	}

	function getTotalPrice()
	{
		// Add passengers price + insurance if taken
	}

	function addPassenger()
	{

	}

}

?>