<?php 

session_start();

class Reservation
{
	public string $destination;
	public int $seatTotal;
	public bool $insurance;
	public $passengers[];

	public class Passenger
	{
		public string $firstName;
		public string $lastName;
		public int $age;

		function __construct($firstName, $lastName, $age)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		function getPassengerPrice()
		{
			if ($this->age <= 12){return  10;}			
			else{return 15;}
		}
	}

	function __construct($destination, $seatTotal, $insurance)
	{
		$this->destination = $destination;
		$this->seatTotal = $seatTotal;
		$this->insurance = $insurance;
	}

	function getTotalPrice()
	{
		// Add passengers price + insurance if taken
		$price = 0
		foreach($passengers as &passenger)
		{
			$price += passenger.getPassengerPrice();
		}
		if ($insurance){ $price += 20;}
	}

}

?>