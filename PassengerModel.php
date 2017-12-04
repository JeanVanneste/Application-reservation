	<?php
	
	class Passenger
	{
		public $firstName;
		public $lastName;
		public $age;

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

	?>