<?php /* Smarty version Smarty-3.1.13, created on 2014-02-15 11:27:02
         compiled from "/var/www/artxchange/ps15/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32065579052ff9556a47886-58360904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0d17a0829afa0048b2cd5c60c051a3b4b194d7' => 
    array (
      0 => '/var/www/artxchange/ps15/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1366914190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32065579052ff9556a47886-58360904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52ff9556a885f1_93672154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ff9556a885f1_93672154')) {function content_52ff9556a885f1_93672154($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>