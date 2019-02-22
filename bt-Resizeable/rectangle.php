<?php 
	class Rectangle
	{
		private $width;
		private $height;
		public function Rectangle($width, $height)
		{
			$this->width = $width;
			$this->height = $height;
		}
		public function getWidth(){
			return $this->width;
		}
		public function setWidth($_width){
			$this->width = $_width;
		}
		public function getHeight(){
			return $this->height;
		}
		public function setHeight($_height){
			$this->height = $_height;
		}
		public function areaRectangle(){
			return $this->width * $this->height;
		}
	}
