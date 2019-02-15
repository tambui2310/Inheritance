<?php
	/**
	 * 
	 */
	class Point
	{	
		public $x;
		public $y;
		
		function __construct()
		{
			$this->x = 0;
			$this->y = 0;
		}
		public function getX(){
			return $this->x;
		}
		public function getY(){
			return $this->y;
		}
		public function setX($_x){
			return $this->x = $_x;
		}
		public function setY($_y){
			return $this->y = $_y;
		}
		public function setXY($__x,$__y){
			return $this->x = $__x.$this->y = $__y; 
		}
		public function getXY(){
			return $this->x." ".$this->y;
		}
		public function toString(){
			echo "(x y) =";
		}
	}
	class MoveablePoint extends Point
	{	
		public $xSpeed;
		public $ySpeed;
		function __construct()
		{
			parent::__construct();
			$this->xSpeed = 0;
			$this->ySpeed = 0;
		}
		public function getXSpeed(){
			return $this->xSpeed;
		}
		public function getYSpeed(){
			return $this->ySpeed;
		}
		public function setXSpeed($_xSpeed){
			return $this->xSpeed = $_xSpeed;
		}
		public function setYSpeed($_ySpeed){
			return $this->ySpeed = $_ySpeed;
		}
		public function setSpeed($__xSpeed,$__ySpeed){
			return $this->xSpeed = $__xSpeed." ".$this->ySpeed = $__ySpeed;
		}
		public function getSpeed(){
			return $this->xSpeed." ".$this->ySpeed;
		}
		public function toString(){
			echo "(x y), speed =";
		}

		public function move(){
			$this->x += $this->xSpeed;
			$this->y += $this->ySpeed;
			return $this->x.$this->y;
		}
	}
		$point = new Point();
		echo $point->toString();
		echo $point->getXY()."<br>";
		echo $point->setX(5)." ".$point->setY(6)."<br>" ;
		$moveablepoint = new MoveablePoint();
		echo $moveablepoint->toString();
		echo $point->getXY().", ".$moveablepoint->getSpeed()."<br>";
		echo $point->getXY().", ".$moveablepoint->setSpeed(4,4);
?>