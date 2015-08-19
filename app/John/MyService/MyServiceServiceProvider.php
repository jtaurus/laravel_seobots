<?php

namespace John\MyService;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class MyServiceServiceProvider extends ServiceProvider{
	

public function register(){
	$this->app->bind('MyService', function(){
		return new MyService(\Request::instance());
	});
}
}