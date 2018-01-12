 <?php

class menuItem
{ 	private $itemName, $description, $price;
	
	public function menuItem($name, $desc, $price)
	{
		$this->itemName = $name;
		$this->description = $desc;
		$this->price = $price;
	}	
	function getname(){
		return $this->itemName;
	}
	function getdescription(){
		return $this->description;
	}
	function getprice(){
		return $this->price;
	}
}
?>