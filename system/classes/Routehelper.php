<?php
namespace Helper;

class Routehelper {

	private $route = 'home';

	/**
	*	Check the params of the url, this is useful to select a view
	*/
	public function __construct(){

		try {
		    $path = parse_url($_SERVER['REQUEST_URI']);
		    $path = $path['path'];

		    if(!empty($path)){
		    	$path_parts = explode("/", $path);
		    	$this->route = end($path_parts);
		    }

		} catch (Exception $e) {
		    echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}


	/**
	*	Get the route for view
	*/

    public function get_route()
    {
    	return (!empty($this->route)) ? $this->route : 'home';
    }
}