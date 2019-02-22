<?php 
class Square
	{
		private $name;
		private $canh;

		public function Square($name, $canh)
		{
			$this->name = $name;
			$this->canh = $canh;
		}
		public function getName()
		{
			return $this->name;
		}
		public function setName($_name)
		{
			$this->name = $_name;
		}
		public function getCanh()
		{
			return $this->canh;
		}
		public function setCanh($_canh)
		{
			$this->canh = $_canh;
		}
		public function areaSquare(){
			return $this->canh * $this->canh ;
		}
	}
