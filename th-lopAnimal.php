<?php 
	abstract class Animal
	{
		abstract public function makeSound();

	}
	class Tiger extends Animal
	{
		
		public function makeSound()
		{
			return "Tiger: roarrrr! <br>" ;
		}
	}

	interface Edible 
	{
		
		public function howToEat();
	}

	class Chicken extends Animal implements Edible
	{

			public function makeSound()
		    {
		        return "Chicken: cluck-cluck! <br>";
		    }

		    public function howToEat()
		    {
		        return "could be fried";
			}
	}
	abstract class Fruit implements Edible
			{
			}
	class Apple extends Fruit
	{
	    public function howToEat()
	    {
	        return "Apple could be slided";
	    }
	}
	class Orange extends Fruit
	{

	    public function howToEat()
	    {
	        return "Orange could be juiced";
	    }
	}
	echo ('---- Animals <br>' );
	$animals = array();
	$animals[0] = new Tiger();
	$animals[1] = new Chicken();

	foreach ($animals as $animal) {
	       echo $animal->makeSound(). ' ';
	       if ($animal instanceof Chicken) {
	           echo $animal->howToEat(). '<br>';
	       }
	}
	echo ('---- Fruits<br>');

	$fruits[0] = new Apple();
	$fruits[1] = new Orange();

	foreach ($fruits as $fruit) {
	    echo $fruit->howToEat() . '<br>';
	}
?>