<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:16:49
  from '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ee11a4dfa6_96084723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd749be1c12a7026573e83ca4089b31e986cfc303' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/footer.tpl',
      1 => 1716437398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ee11a4dfa6_96084723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-container">
  <div class="container">
    
    <div class="row">
      <div class="col-md-12">
        
          <p class="text-sm-center">
              <a href="https://federica.ecomdoo.eu/content/3-termeni-si-conditii-de-utilizare" target="_blank" style="color: #000;" rel="noopener noreferrer nofollow">
                Termeni si conditii
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://federica.ecomdoo.eu/content/2-politica-condidentialitate" target="_blank" style="color: #000;" rel="noopener noreferrer nofollow">
                Politica confidentialitate
              </a>
          </p>
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4885283576670ee11a4cb56_88683109', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>

     
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/js/custom.js"><?php echo '</script'; ?>
><?php }
/* {block 'copyright_link'} */
class Block_4885283576670ee11a4cb56_88683109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_4885283576670ee11a4cb56_88683109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Toate drepturile rezervate %autor%','sprintf'=>array('%autor%'=>'Florin Ciocotisan','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </span>
          <?php
}
}
/* {/block 'copyright_link'} */
}
