<?php
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');

require_once( APPPATH . 'include/DB/DB.php' );

class Cidb extends DB {
    protected $ci;
    public function  __construct(){
        $this->ci = & get_instance();
        $this->ci->load->config('db');//加载db的配置文件
        //DB配置
        define('DBHOST', $this->ci->config->item('DBHOST'));
        define('DBUSER', $this->ci->config->item('DBUSER'));
        define('DBPW', $this->ci->config->item('DBPW'));
        define('DBCHARSET', $this->ci->config->item('DBCHARSET'));
        define('DBBASE', $this->ci->config->item('BASE'));
        //运行Base，定位到数据库
        self::Base();
    }
} 