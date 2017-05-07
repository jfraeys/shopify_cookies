<?php
/**
 * 
 * @author Jeremie Fraeys
 *
 */
class PaginatedAPI{
	const URL = "https://backend-challenge-fall-2017.herokuapp.com/orders.json?page=";
	/**
	 * 
	 * @param unknown $pages
	 * @return string
	 */
	public function orders_url($page){
		return self::URL . $page;
	}
	
	/**
	 * 
	 * @param unknown $url
	 * @return mixed
	 */
	public function get_data($url){
		$jsondata = file_get_contents($url, 0, null, null);
		$url = json_decode($jsondata);
		
		return $url;
	}
}
