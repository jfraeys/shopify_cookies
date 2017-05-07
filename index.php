<?php 

require('classes/PaginatedAPI.php');
require('classes/UnfulfilledOrders.php');
require('classes/Orders.php');

function get_url($page, $api){
	$orders_url = $api->orders_url($page);
	$url = $api->get_data($orders_url);
	
	return $url;
}

//gets data from json page 1
$api = new PaginatedAPI;
$page = 1;
$url = get_url($page, $api);

$available = $url->available_cookies;

$unfulfilled_list = new UnfulfilledOrders;

$res = array();

while (!empty($url->orders)){

	foreach($url->orders as $orders) {
		
		$new_orders = new Orders($orders->id);
		
		foreach($orders->products as $products){

			$new_orders->addProducts($products->title, $products->amount);
			
		}
		
		if($new_orders->isCookie()){
			$unfulfilled_list->addOrders($new_orders);
		}
	}
	
// 	gets data from json pages
	$page++;
	$url = get_url($page, $api);
}

$size = count($unfulfilled_list->unfulfilled_orders);

//sort by object->amount and remove from array if least then available
$unfulfilled_list->sortArray();

for($i = 0; $i < $size; $i++){
 
	if($unfulfilled_list->unfulfilled_orders[$i]->lessThanAvailable($available) != 0) {
		unset($unfulfilled_list->unfulfilled_orders[$i]);
	} else {
		array_push($res, $unfulfilled_list->unfulfilled_orders[$i]->getID());
	}
}

$output =  array(
		"remaining_cookies: " => $available,
		"unfulfilled_orders: " => implode(", ", $res)
);



$json_final = json_encode($output, JSON_PRETTY_PRINT);
// $json_final = preg_replace('^\d+(,\d+)*$','\[*\]',$json_final);
printf("<pre>%s</pre>", $json_final);



