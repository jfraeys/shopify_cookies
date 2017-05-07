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
		
		usort($this -> unfulfilled_orders, function($a, $b) {
			
			return ($a - $b) ? -1 : 1;
		});

	}
}

	
	
	