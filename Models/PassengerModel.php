<?php
	
class Passenger
{
	public $id;
	public $firstName;
	public $lastName;
	public $age;
	public $flightId;

	function __construct($lastId, $firstName, $lastName, $age, $flightId)
	{
		$this->id = $lastId + 1;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
		$this->flightId = $flightId;
	}

	function getPassengerPrice()
	{
		if ($this->age <= 12){return  10;}			
		else {return 15;}
	}

}	
?>