<?php
/**
 * Pagniated Object
 * @author Jeremie Fraeys
 *
 */
class PaginatedAPI{
	const URL = "https://backend-challenge-fall-2017.herokuapp.com/orders.json?page=";
	
	/**
	 * returns the URL of each pages
	 * @param unknown $pages
	 * @return url with pages
	 */
	public function orders_url($page){
		return self::URL . $page;
	}
	
	/**
	 * gets content of the json file and decodes the jsondata
	 * @param unknown $url
	 * @return mixed
	 */
	public function get_data($url){
		$jsondata = file_get_contents($url, 0, null, null);
		$url = json_decode($jsondata);
		
		return $url;
	}
}
