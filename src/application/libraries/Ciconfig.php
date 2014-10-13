<?php
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');

class Ciconfig {
    protected $ci;
    public function  __construct(){
        $this->ci = & get_instance();

        header('Content-Type: text/html; charset=UTF-8');

        //Localhost
        define('LOCAL_URL', "http://".$_SERVER['HTTP_HOST']."/");

        //自定义 $_SERVER
        preg_match_all('/(.*)\/(.*)\.php/', $_SERVER['SCRIPT_NAME'], $_SERVER['HOST_max']);
        $_SERVER['HOST_max'] = !empty($_SERVER['HOST_max'][1][0]) ? "http://".$_SERVER['HTTP_HOST'].$_SERVER['HOST_max'][1][0]."/" : "http://".$_SERVER['HTTP_HOST']."/";
        $_SERVER['HOST_this'] = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        //版本
        $_SERVER['ver'] = "20140916";
    }
} 