<?php
	/**
	 * 
	 */
	class Circle
	{	
		public $radius;
		public $color;
		
		public function __construct($radius, $color)
		{
			$this->radius = $radius;
			$this->color  = $color;
		}
		public function getRadius(){
			return $this->radius;
		}
		public function getColor (){
			return $this->color;
		}
		public function setRadius($_radius){
			return $this->radius = $_radius;
		}
		public function setColor($_color){
			return $this->radius = $_color;
		}
		public function dienTich(){
			return $this->radius * $this->radius * pi();
		}
		public function chuVi(){
			return pi() * $this->radius * 2;
		}
		public function toString(){
			echo "Hình tròn";
		}
	}

	class Cylinder extends Circle
	{	
		public $height;
		public function __construct($radius, $color, $height)
		{
			parent::__construct($radius, $color);
			$this->height = $height;
		}
		public function getHeight(){
			return $this->height;
		}
		public function volume(){
			return pi() * $this->radius * $this->height;
		}
		public function toString(){
			echo "Kế thừa hình tròn";
		}		
	}
	$circle = new Circle(4, "BLUE");
	echo $circle->toString();
	echo "<br>Bán kính: ".$circle->setRadius(5);
	echo "<br> Diện tích hình tròn là: ".$circle->dienTich();
	echo "<br> Chu vi hình tròn là: ".$circle->chuVi();
	echo "<br> Màu: ".$circle->setColor("Blue")."<br>";

	$cylinder = new Cylinder(4, "Blue", 10);
	echo $cylinder->toString();
	echo "<br>Chiều cao: ".$cylinder->getHeight();
	echo "<br>Thể tích hình trụ: ".$cylinder->volume();		
?>