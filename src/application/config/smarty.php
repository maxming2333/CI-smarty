<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['theme']        	= 'default';
$config['left_delimiter'] 	= "<!--{";
$config['right_delimiter'] 	= "}-->";
$config['template_dir'] 	= APPPATH . 'views';
$config['compile_dir']  	= APPPATH . 'include/smarty/templates_c';
$config['cache_dir']    	= APPPATH . 'include/smarty/cache';
$config['error_reporting'] 	= E_ALL & ~E_NOTICE;
$config['debugging']      	= false;
$config['caching']      	= false;
$config['cache_lifetime']  	= 60*60;
$config['static_dir']  		= "static/";