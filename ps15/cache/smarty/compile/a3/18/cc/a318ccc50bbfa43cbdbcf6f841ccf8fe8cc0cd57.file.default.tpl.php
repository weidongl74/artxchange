<?php /* Smarty version Smarty-3.1.14, created on 2014-02-15 17:28:34
         compiled from "/var/www/artxchange/ps15/modules/blockleocustom3/tmpl/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16002880152ffea12020ca2-31523266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a318ccc50bbfa43cbdbcf6f841ccf8fe8cc0cd57' => 
    array (
      0 => '/var/www/artxchange/ps15/modules/blockleocustom3/tmpl/default.tpl',
      1 => 1371670688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16002880152ffea12020ca2-31523266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_prefix' => 0,
    'pos' => 0,
    'show_title' => 0,
    'module_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ffea12038e01_20111694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffea12038e01_20111694')) {function content_52ffea12038e01_20111694($_smarty_tpl) {?><div class="customhtml block <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
" id="leo-customhtml-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>
		<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h3>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div><?php }} ?>