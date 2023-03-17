<?php
class Person
{
	public $firstName;
	public $lastName;
	
	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function get_first($firstName)
	{
		return $firstName;
	}

	public function get_last($lastName)
	{
		return $lastName;
	}

	public function set_first($firstName)
	{
		$this->firstName = $firstName;
	}

	public function set_last($lastName)
	{
		$this->lastName = $lastname;
	}

	public function get_all()
	{
		echo "Имя - ".$this->firstName.". Фамилия - ".$this->lastName; 
	}
}
$person1 = new Person('Ivan', 'Ivanov');
$person1->get_all();
?>