<?php
	/**
	 * 
	 */
	class Shape
	{	
		public $color;
		function __construct()
		{
			$this->color = "Yellow";
		}
		public function hienThi(){
			return $this->color;
		}
	}
	class Triangle extends Shape
	{	
		public $side1;
		public $side2;
		public $side3;
		function __construct()
		{
			parent::__construct();
			$this->side1 = 1;
			$this->side2 = 1;
			$this->side3 = 1;
		}
		public function getArea(){
			return sqrt(($this->side1 + $this->side2 + $this->side3)*($this->side1 + $this->side2 - $this->side3)*($this->side2 + $this->side3 - $this->side1) * ($this->side3 + $this->side1 - $this->side2)) / 4;
		}
		public function getPerimeter(){
			return $this->side1 + $this->side2 + $this->side3;
		}
		public function toString(){
			echo "Tam giác ABC <br> Cạnh AB = ".$this->side1."<br> Cạnh BC = ".$this->side2."<br> Cạnh CA = ".$this->side3;
		}
	}
	$shape = new Shape();
	echo $shape->hienThi()."<br>";
	$triangle = new Triangle();
	echo $triangle->toString();
	echo "<br>Diện tích tam giác ABC = ".$triangle->getArea();
	echo "<br>Chu vi tam giác ABC = ".$triangle->getPerimeter();

?>