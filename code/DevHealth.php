<?php

class DevHealth extends Controller {
	function index() {
		$e = new EnvironmentChecker('health', 'Site health');
		$e->setErrorCode(404);
		return $e;
	}
}