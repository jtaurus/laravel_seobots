<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController{


	public function __construct(){

	}

	public function index_page(){
		$instance = \App::make('MyService');
		dd($instance->check_if_user_agent_is_forbidden());
	}

	public function test(){
		echo "This shouldn't be visible to you if you are a bot";
	}

}