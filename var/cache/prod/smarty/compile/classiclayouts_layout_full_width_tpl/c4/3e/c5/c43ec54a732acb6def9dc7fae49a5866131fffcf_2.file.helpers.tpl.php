<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:16:49
  from '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ee119e33d9_94171188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c43ec54a732acb6def9dc7fae49a5866131fffcf' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708956042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ee119e33d9_94171188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/r118530wood/federica.ecomdoo.eu/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/c4/3e/c5/c43ec54a732acb6def9dc7fae49a5866131fffcf_2.file.helpers.tpl.php',
    'uid' => 'c43ec54a732acb6def9dc7fae49a5866131fffcf',
    'call_name' => 'smarty_template_function_renderLogo_19286249066670ee119df655_29603333',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_19286249066670ee119df655_29603333 */
if (!function_exists('smarty_template_function_renderLogo_19286249066670ee119df655_29603333')) {
function smarty_template_function_renderLogo_19286249066670ee119df655_29603333(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_19286249066670ee119df655_29603333 */
}
