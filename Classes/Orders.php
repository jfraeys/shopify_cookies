<?php

require('classes/products.php');

/**
 * Order object
 * @author Jeremie Fraeys
 *
 */
class Orders {
	private $id;
	private $products = array();
	
	public function __construct($id) {
		
		$this -> id = $id;
	}
	
	public function getId() {
		
		return $this->id;
	}
	
	/**
	 * adds product to the array of product in the object
	 * @param string $title
	 * @param int $amount
	 */
	public function addProducts($title, $amount){
		
		array_push($this->products,new products($title, $amount));
	}
	
	/**
	 * returns id of object that contains product cookie
	 * @return int id
	 */
	public function isCookie() {
		
		foreach($this -> products as $products){
						
			if($products->isCookie() == true){
				
				return $products->getAmount();
			}
		}
		
		return 0;
	}
	
	/**
	 * returns id of object that contains product cookie and sub available cookies
	 * @param int $available
	 * @return int id
	 */
	public function lessThanAvailable (&$available) {
		
		foreach($this->products as $products) {
			
			if($products->isCookie() == true && $products->lessThanAvailable($available) == true) {
				
				$available -= $products->amount;
				
				return $this->id;
			}
		}
		
		return 0;
	}
}