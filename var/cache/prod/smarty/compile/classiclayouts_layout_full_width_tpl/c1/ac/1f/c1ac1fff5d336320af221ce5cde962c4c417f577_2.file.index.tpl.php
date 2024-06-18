<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:16:49
  from '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ee119c8302_47176214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1ac1fff5d336320af221ce5cde962c4c417f577' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/themes/classic/templates/index.tpl',
      1 => 1716522568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ee119c8302_47176214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17444731056670ee119c66a6_11784202', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16406688146670ee119c6a57_27406449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <p class="intro"><b>Fa cunostinta cu <font color="#da2032">Federica</font>!</b>
             <br /><br />Ea poate fi assistentul tau virtual care iti face ordine in business, ajutandu-te sa iti automatizezi administrarea catalogului tau de produse.
            <br /><br />Tot ce ai de facut se rezuma la 4 pasi:<br />
              <ul>
                  <li> 1. iti creezi un cont </li>
                  <li> 2. adaugi url-urile feed-urilor de produse</li>
                  <li> 3. setezi cateva reguli</li>
                  <li> 4. exporti in final un singur feed de produse organizat asa cum vrei tu</li>
              </ul>
          </p>
        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20193628286670ee119c73a1_85815936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="row" style="text-align: center;">
            <div class="home_buttons col-md-12">
                <div class="login col-md-6 col-xs-12">
                    <button class="btn button exclusive btn-primary"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
administration">Autentificare</a></button>
                </div>    
                <div class="subscribe col-md-6 col-xs-12">
                    <button class="btn button exclusive btn-primary"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
inregistrare">Inscriere</a></button>
                </div> 
            </div>
          </div>  
          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_9924144096670ee119c70a8_11644373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20193628286670ee119c73a1_85815936', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17444731056670ee119c66a6_11784202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_17444731056670ee119c66a6_11784202',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16406688146670ee119c6a57_27406449',
  ),
  'page_content' => 
  array (
    0 => 'Block_9924144096670ee119c70a8_11644373',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20193628286670ee119c73a1_85815936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
          
         
          
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16406688146670ee119c6a57_27406449', 'page_content_top', $this->tplIndex);
?>

          <br /><br /><br /><br />
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9924144096670ee119c70a8_11644373', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
