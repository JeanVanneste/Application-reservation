	<?php
	
	class Passenger
	{
		private $id;
		public $firstName;
		public $lastName;
		public $age;

		function __construct($firstName, $lastName, $age, $lastId)
		{
			$this->id = $lastId + 1;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		function getPassengerPrice()
		{
			if ($this->age <= 12){return  10;}			
			else {return 15;}
		}
	}

	?>