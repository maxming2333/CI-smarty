<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function index()
	{
		$script = array(
			"css" => array(
				"bootstrap.min.css",
				"index.style.css"
			),
			"js" => array(
				"bootstrap.min.js",
				"index.main.js"
			)
		);
		$this->assign("script", $script);
		$this->assign("jQuery", true);
		$this->assign("base", $_SERVER['HOST_max']);
		$this->assign("title", "首页");
		$this->display('index.tpl.html');
	}
}