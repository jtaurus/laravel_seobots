<?php

namespace John\MyService;

use \Illuminate\Http\Request;

class MyService{
	
	// reference to http request object:
	protected $request;

	protected $forbiddenUserAgents = array(
		'AhrefsBot',
		'mjseo',
		'seomoz');

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function get_header(){
		return $this->request->header();
	}

	public function get_user_agent(){
		return $this->request->header("user-agent");
	}

	public function get_forbidden_user_agents(){
		return $this->forbiddenUserAgents;
	}

	public function check_if_user_agent_is_forbidden(){
		return in_array($this->get_user_agent(), $this->forbiddenUserAgents);
	}

}