<?php 

class Reservation
{
	public $destination;
	public $seatTotal;
	public $insurance;
	public $passengers;
	public $id = 1;

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