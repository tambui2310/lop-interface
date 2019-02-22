<?php
	include "rectangle.php";
	include "Circle.php";
	include "Square.php";
	interface Resizeable 
	{
		public function resize($percent);
	}
	class ComparableCircle extends Circle implements Resizeable
	{
		
		public function ComparableCircle($name, $radius)
		{
			parent::Circle($name, $radius);
		}
		public function resize($_percent){
			return   $_percent * parent::areaCircle();
		}
	}

	class ComparableRectangle extends Rectangle implements Resizeable
	{
		
		public function ComparableRectangle($width, $height)
		{
			parent::Rectangle($width, $height);
		}
		public function resize($_percent){
			return $_percent * parent::areaRectangle();
		}
	}
	class ComparableSquare extends Square implements Resizeable
	{
		
		public function ComparableSquare($name, $canh)
		{
			parent::Square($name, $canh);
		}
		public function resize($_percent){
			return $_percent * parent::areaSquare();
		}
	}

	$number = rand(1,100);
	$circles = new ComparableCircle("Hình tròn", 5);
	echo $circles->getName().":<br> ";
	echo "Bán kính: ".$circles->getRadius()."<br>";
	echo "Diện tích ban đầu hình tròn: ".$circles->areaCircle()."<br>";
	echo "Kích thước tăng ngẫu nhiên: ".$number."<br>";
	echo "Diện tích sau khi tăng kích thước: ".$circles->resize($number)."<br><br>";
	$rectangles = new ComparableRectangle(2,3);
	echo "Hình chữ nhật: <br>";
	echo "Chiều dài: ".$rectangles->getHeight()."<br>";
	echo "Chiều rộng: ".$rectangles->getWidth()."<br>";
	echo "Diện tích ban đầu HCN: ".$rectangles->areaRectangle()."<br>";
	echo "Kích thước tăng ngẫu nhiên: ".$number."<br>";
	echo "Diện tích sau khi tăng kích thước: ".$rectangles->resize($number)."<br><br>";
	$squares = new ComparableSquare("Hình vuông",3);
	echo $squares->getName().":<br> ";
	echo "Cạnh: ".$squares->getCanh()."<br>";
	echo "Diện tích ban đầu Hình vuông: ".$squares->areaSquare()."<br>";
	echo "Kích thước tăng ngẫu nhiên: ".$number."<br>";
	echo "Diện tích sau khi tăng kích thước: ".$squares->resize($number)."<br><br>";
?>