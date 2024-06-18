<?php
/* Smarty version 4.3.4, created on 2024-06-17 22:09:48
  from '/home/r118530wood/federica.ecomdoo.eu/administration/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667089fc963cc5_40671458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48ec443cc56a0679181a167ccaab415b7022d5db' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/administration/themes/default/template/content.tpl',
      1 => 1711700272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667089fc963cc5_40671458 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
