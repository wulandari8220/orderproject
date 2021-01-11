<?php
class Menu {
	private $name;
	private $price;
	private $image;
	private $orderCount = 0;
	
	public function __construct ($name, $price, $image, $orderNumber) {
		$this -> name = $name;
		$this -> price = $price;
		$this -> image = $image;
		$this -> orderNumber = $orderNumber;
	}
	
	public function getName() {
		return $this -> name;
	}
	
	public function getImage() {
		return $this -> image;
	}
	
	public function getPrice() {
		return $this -> price;
	}
	
	
	public function getOrderNumber() {
		return $this -> orderNumber;
	}
	
	public function setOrderCount($orderCount) {
		$this -> orderCount = $orderCount;
	}
	
	public function getOrderCount() {
		return $this -> orderCount;
	}
	
	public function getTotalPrice() {
		return $this -> getOrderCount()* $this -> getPrice();
	}
}
?>