<?php

class AdminBaseController extends BaseController
{
	public function missingMethod($params = array()) {
		return "404 Not Found";
	}
	
}