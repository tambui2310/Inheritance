<?php
	/**
	 * 
	 */
	class Point2D
	{	
		private $x;
		private $y;
		
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
			echo "(x y) = ";
		}
	}
	class Point3D extends Point2D
	{	
		private $z;
		function __construct()
		{
			parent::__construct();
			$this->z = 0;
		}
		public function getZ(){
			return $this->z;
		}
		public function setZ($_z){
			return $this->z = $_z;
		}
		public function getXYZ(){
			return parent::getX()." ".parent::getY()." ".$this->z;
		}
		public function setXYZ($__x, $__y, $__z){
			return $this->x = $__x.$this->y = $__y.$this->z = $__z;
		}
		public function toString(){
			echo "(x y z) = ";
		}

	}
	$point2d = new Point2D();
	echo $point2d->toString();
	echo "(".$point2d->getXY().")<br>";
	$point3d = new Point3D();
	echo $point3d->toString();
	echo "(".$point3d->getXYZ().")";
?>