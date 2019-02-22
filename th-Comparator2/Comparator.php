<?php 
	/**
	 * 
	 */
	class Circle
	{
		private $name;
		private $radius;

		public function Circle($name, $radius)
		{
			$this->name = $name;
			$this->radius = $radius;
		}
		public function getName()
		{
			return $this->name;
		}
		public function setName($_name)
		{
			$this->name = $_name;
		}
		public function getRadius()
		{
			return $this->radius;
		}
		public function setRadius($_radius)
		{
			$this->radius = $_radius;
		}
	}
	interface Comparable
	{
		public function compareTo($objOne, $objTwo);
	}

	class ComparableCircle  extends Circle implements Comparable
	{
		public function ComparableCircle($name, $radius)
		{
			parent::Circle($name, $radius);
		}

		public function compareTo($circleOne, $circleTwo)
    	{
	        $circleOneRadius = $circleOne->getRadius();
	        $circleTwoRadius = $circleTwo->getRadius();
	        if ($circleOneRadius > $circleTwoRadius) {
	            return 1;
	        }  else if($circleOneRadius < $circleTwoRadius) {
	            return -1;
	        } else {
	            return 0;
	        }
	    }
	}
	$circles[0] = new ComparableCircle('circleOne', 8);
	$circles[1] = new ComparableCircle('circleTwo', 2);
	$circles[2] = new ComparableCircle('circleThree', 4);
	echo ('Trước khi sắp xếp theo bán kính: <br>');
	foreach ($circles as $circle) {
	    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
	}
	sort($circles);
	echo ('Sau khi sắp xếp theo bán kính: <br>');
	foreach ($circles as $circle ) {
		echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
	}
?>