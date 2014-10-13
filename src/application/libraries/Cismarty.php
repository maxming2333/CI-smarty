<?php
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');
require_once( APPPATH . 'include/smarty/libs/Smarty.class.php' );

class Cismarty extends Smarty {
    protected $ci;
    public function  __construct(){
        parent::__construct();
        $this->ci = & get_instance();
        $this->ci->load->config('smarty');//加载smarty的配置文件
        //获取相关的配置项
        $this->left_delimiter   = $this->ci->config->item('left_delimiter');
        $this->right_delimiter   = $this->ci->config->item('right_delimiter');
        $this->template_dir   = $this->ci->config->item('template_dir');//设置模板目录
        $this->compile_dir    = $this->ci->config->item('compile_dir');//设置编译目录
        $this->cache_dir      = $this->ci->config->item('cache_dir');//缓存文件夹
        $this->error_reporting        = $this->ci->config->item('error_reporting');
        $this->debugging        = $this->ci->config->item('debugging');//是否调试
        $this->caching        = $this->ci->config->item('caching');//开启缓存,为flase的时侯缓存无效  
        $this->cache_lifetime = $this->ci->config->item('cache_lifetime');//缓存时间
        $this->assign("static_dir", $this->ci->config->item('static_dir')); //设置静态资源目录
    }
} 