<?php

class UnfulfilledOrders {
	
	public $unfulfilled_orders = array();
	
	/**
	 *
	 * @param unknown $unfulfilled_orders
	 */
	public function addOrders ($unfulfilled_orders) {
		array_push($this -> unfulfilled_orders, $unfulfilled_orders);
	}
	
	/**
	 * sort array decending by id
	 */
	public function sortArray (){
				
		usort($this->unfulfilled_orders, function ($first, $second){
						
			if($first->isCookie() == $second->isCookie()) {
				return ($first->getId() < $second->getId()) ? -1 : 1;
			}
			
			return ($second->isCookie() < $first->isCookie()) ? -1:1;
			
		});
		
		foreach($this->unfulfilled_orders as $orders) {
			 echo $orders->getId();
		}
	}
}

	
	
	