<?php

require "../bootstrap.php";

use core\Controller;
use core\Method;

try {
	$controller = new Controller;
	$controller = $controller->load();

	$method = new Method;
	$method = $method->load($controller);

	$controller->$method();

} catch (\Exception $e) {
	dd($e->getMessage());
}