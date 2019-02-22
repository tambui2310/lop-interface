<?php
include "Circle.php";
include "Comparator.php";
class ComparableCircle extends Circle implements Comparable
{
    public function ComparableCircle($name, $radius)
    {
        parent::Circle($name, $radius);
    }
    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return "Circle One > Circle Two";
        }  else if($this->getRadius() < $circleTwoRadius) {
            return "Circle One < Circle Two";
        } else {
            return "Circle One = Circle Two";
        }
    }
}
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$test = $circleOne->compareTo($circleTwo);
echo "Radius Circle One : ".$circleOne->getRadius()."<br>";
echo "Radius Circle Two : ".$circleTwo->getRadius()."<br>";
echo ('Comparable: <br>');
echo $test;
?>