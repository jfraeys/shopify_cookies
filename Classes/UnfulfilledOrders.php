<?php
/**
 * Unfulfilled Object
 * @author Jeremie Fraeys
 *
 */
class UnfulfilledOrders {
	
	public $unfulfilled_orders = array();
	
	/**
	 * Adds order to list of order containing cookies.
	 * @param array of unfulfilled orders
	 */
	public function addOrders ($unfulfilled_orders) {
		array_push($this -> unfulfilled_orders, $unfulfilled_orders);
	}
	
	/**
	 * Sort array in decending order by number of cookie and 
	 */
	public function sortArray (){
				
		usort($this->unfulfilled_orders, function ($first, $second){
						
			if($first->isCookie() == $second->isCookie()) {
				return ($first->getId() < $second->getId()) ? -1 : 1;
			}
			
			return ($second->isCookie() < $first->isCookie()) ? -1:1;
			
		});
	}
}

	
	
	