<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 17:35:01
         compiled from "application\views\header.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:134105409b7e1a3d8e7-05494501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39289eb78e792013d514ded9ce534c0ae0de5064' => 
    array (
      0 => 'application\\views\\header.tpl.html',
      1 => 1412760900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134105409b7e1a3d8e7-05494501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5409b7e1a800c6_37844168',
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
    'static_dir' => 0,
    'jQuery' => 0,
    'script' => 0,
    'V' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5409b7e1a800c6_37844168')) {function content_5409b7e1a800c6_37844168($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn" ng-app>
<head>
<!--utf8 DOM-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="maxming">
<meta name="copyright" content="NetEase">
<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
<title>
	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-网易网站组PM管理系统
</title>
<style type="text/css">
/*选中样式*/
::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }
::o-selection{ background-color: #E13300; color: white; }
</style>
<!--所有模板都启用Angular-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_dir']->value;?>
js/angular.min.js"></script>
<!--Have jQuery ? -->
<?php if ($_smarty_tpl->tpl_vars['jQuery']->value) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_dir']->value;?>
js/jquery-1.8.3.min.js"></script>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['V'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['V']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['script']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['V']->key => $_smarty_tpl->tpl_vars['V']->value) {
$_smarty_tpl->tpl_vars['V']->_loop = true;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_dir']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['V']->value;?>
">
<?php } ?>
</head>

<body><?php }} ?>
