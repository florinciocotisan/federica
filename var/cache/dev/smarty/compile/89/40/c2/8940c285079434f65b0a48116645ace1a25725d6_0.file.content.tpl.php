<?php
/* Smarty version 4.3.4, created on 2024-05-28 02:26:41
  from '/home/r118530wood/federica.ecomdoo.eu/administration/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665516b1e65f91_60761456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8940c285079434f65b0a48116645ace1a25725d6' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/administration/themes/new-theme/template/content.tpl',
      1 => 1711700272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665516b1e65f91_60761456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
