<?php 

require('classes/PaginatedAPI.php');
require('classes/UnfulfilledOrders.php');
require('classes/Orders.php');
/**
 * Converts the json file data into array
 * @param int $page
 * @param object $api
 * @return array containing data
 */
function get_url($page, $api){
	$orders_url = $api->orders_url($page);
	$url = $api->get_data($orders_url);
	
	return $url;
}

//gets data from json page 1 yyyvvyy
$api = new PaginatedAPI;
$page = 1;
$url = get_url($page, $api);

$unfulfilled_list = new UnfulfilledOrders;

$res = array();

$available = $url->available_cookies;

while (!empty($url->orders)){

	foreach($url->orders as $orders) {
		
		$new_orders = new Orders($orders->id);
		
		foreach($orders->products as $products){

			$new_orders->addProducts($products->title, $products->amount);
			
		}
		
		if($new_orders->isCookie() != 0){
			$unfulfilled_list->addOrders($new_orders);
		}
	}
	
// 	gets data from json pages
	$page++;
	$url = get_url($page, $api);
}

$size = count($unfulfilled_list->unfulfilled_orders);

//sort by object->amount
$unfulfilled_list->sortArray();

//removes orders from unfulfilled_orders if enough cookies are availble. Otherwise, adds the id of the order to the results array
for($i = 0; $i < $size; $i++){
 
	if($unfulfilled_list->unfulfilled_orders[$i]->lessThanAvailable($available) != 0) {
		unset($unfulfilled_list->unfulfilled_orders[$i]);
	} else {
		array_push($res, $unfulfilled_list->unfulfilled_orders[$i]->getID());
	}
}

//create array that will be encoded into json
$output =  array(
		"remaining_cookies: " => $available,
		"unfulfilled_orders: " => implode(", ", $res)
);

$json_final = json_encode($output, JSON_PRETTY_PRINT);
printf("<pre>%s</pre>", $json_final);

/*
 * correct answer:
 * 	available: 0
 * 	unfulfilled: 8, 10, 5, 7, 11
 */





