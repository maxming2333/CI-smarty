<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 17:30:05
         compiled from "application\views\footer.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:230275409b7e1a990b9-07172994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046ccf5e7099a3564fd707bc13b773a1ad83e99e' => 
    array (
      0 => 'application\\views\\footer.tpl.html',
      1 => 1412760601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230275409b7e1a990b9-07172994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5409b7e1aba6d7_62892941',
  'variables' => 
  array (
    'static_dir' => 0,
    'script' => 0,
    'V' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5409b7e1aba6d7_62892941')) {function content_5409b7e1aba6d7_62892941($_smarty_tpl) {?><!--
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_dir']->value;?>
js/require.js" defer async="true"></script>
-->
<?php  $_smarty_tpl->tpl_vars['V'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['V']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['script']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['V']->key => $_smarty_tpl->tpl_vars['V']->value) {
$_smarty_tpl->tpl_vars['V']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_dir']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['V']->value;?>
"></script>
<?php } ?>
</body>
</html><?php }} ?>
