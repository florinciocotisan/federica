<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:16:49
  from '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ee11a3f1a0_14890927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9af3c5f4a9d53456eabcc41e0a51fad4c9abd33' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/_partials/header.tpl',
      1 => 1716437210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ee11a3f1a0_14890927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10169462886670ee11a3c882_35905709', 'header_top');
?>

<?php }
/* {block 'header_top'} */
class Block_10169462886670ee11a3c882_35905709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_10169462886670ee11a3c882_35905709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row" style="text-align: center;">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        
      </div>
        
        
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
        <div class="row" style="text-align: center;">
            <div id="history_progress" class="w3-light-grey">
               <div class="content">

                <div id="first_milestone" class="milestone active">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">creezi cont</span>
                </div>

                <div id="second_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">adaugi feed-uri</span>
                </div>

                <div id="third_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">setezi reguli</span>
                </div>


                <div id="fourth_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">exporti feed final</span>
                </div>

                <div id="myBar" class="w3-green"></div>
               </div>
            </div>
        </div>
           <?php }?>
      
    </div>
      
      
      
  </div>
  
<?php
}
}
/* {/block 'header_top'} */
}
