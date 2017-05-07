<?php
/**
 * 
 * @author Jeremie Fraeys
 *
 */
class Products {
	
	public $title;
	public $amount;
	/**
	 * construct of product object
	 * @param string $title
	 * @param int $amount
	 */
	public function __construct($title, $amount) {
		
		$this->title = $title;
		$this->amount = $amount;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getAmount() {
		return $this->amount;
	}
	
	/**
	 * checks for cookies
	 * @return boolean
	 */
	public function isCookie(){
		
		if($this -> title == "Cookie") {
			
			return true;
		}
		
		return false;
	}
	/**
	 * checks if enough cookie to supply the order 
	 * @param int $available_cookies
	 * @return boolean
	 */
	public function lessThanAvailable($available_cookies) {
		
		if($this->amount <= $available_cookies) {
			
			return true;
		}
		
		return false;
	}
}