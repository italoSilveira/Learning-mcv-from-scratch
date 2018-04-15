<?php

namespace app\classes;

class Uri {

	public static function uri() {
		$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		return str_replace("/mvc/", "/", $uri);
	}

}