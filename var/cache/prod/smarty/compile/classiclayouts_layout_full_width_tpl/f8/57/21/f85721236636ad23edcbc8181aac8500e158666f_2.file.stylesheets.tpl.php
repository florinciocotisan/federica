<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:16:49
  from '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ee11a0ce75_55640303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85721236636ad23edcbc8181aac8500e158666f' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/stylesheets.tpl',
      1 => 1716432131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ee11a0ce75_55640303 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

     
     <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/css/custom.css" type="text/css" media="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}
