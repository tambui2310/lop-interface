<?php 
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
		public function areaCircle(){
			return $this->radius * $this->radius * pi();
		}
	}
 