<?php 

// Person-1

/*$pers1_name = 'Victor';
$pers1_special = 'doctor';
$pers1_age = 35;

function pers1_hello($name, $spec, $age){
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

pers1_hello($pers1_name, $pers1_special, $pers1_age);

echo "<br><br>";


// Person-2

$pers2_name = 'Alicia';
$pers2_special = 'actressr';
$pers2_age = 25;

function pers2_hello($name, $spec, $age){
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

pers2_hello($pers2_name, $pers2_special, $pers2_age);



//создание объекта в ООП

class Person {
	public $name;
	public $special;
	public $age;
}

$person1 = new Person;

$person1->name = 'Adam';
$person1->speciality = 'driver';
$person1->age = 29;

/*echo $person1->name;
echo $person1->speciality;
echo $person1->age;*/

/*function person1_hello($name, $spec, $age){

	echo "Hello! My name is $name. I am $spec and $age years old. ";
}
echo "<br><br>";
person1_hello($person1->name, $person1->speciality, $person1->age);*/


//Добавляем ф-цию для объекта
class Person {
	public $name;
	public $speciality;
	public $age;

	public function greeting(){
		
		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
	}
}

$person1 = new Person;

$person1->name = 'Eva';
$person1->speciality = 'decorator';
$person1->age = 30;

//$person1->greeting($person1->name, $person1->speciality, $person1->age);

$person1->greeting();

echo "<br><br>";

//Используем ф-цию конструктор

class PersonNew {
	public $name;
	public $speciality;
	public $age;

	public function __construct($name, $spec, $age){
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
	}

	public function greeting(){
		
		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
	}
}

$person1 = new PersonNew('Nina', 'floristic', 26);
$person1->greeting();

echo "<br><br>";

$person2 = new PersonNew('Lara', 'Web-designer', 32);
$person2->greeting();


?>