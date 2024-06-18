<?php
/* Smarty version 4.3.4, created on 2024-06-17 23:55:13
  from '/home/r118530wood/federica.ecomdoo.eu/modules/lot_exportergoogle/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670a2b1b0e992_88403372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dee976c8168b3165df3ef52bce6ed2a5d663c96d' => 
    array (
      0 => '/home/r118530wood/federica.ecomdoo.eu/modules/lot_exportergoogle/views/templates/admin/configure.tpl',
      1 => 1717791957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670a2b1b0e992_88403372 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('modulepath'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ))),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
>
var itemslang = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'items','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
";
var name_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name field is empty!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
";
var feedcontent_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feed structure is empty!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>

  <div class="variableconfigurator_bg"> </div>  
<input type="hidden" id="sodcheiesig" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['secure_key']->value,'html','UTF-8' ));?>
" />



<div id="lotmyProgress">
    <label class="emptymessage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products corresponding to your criteria at this moment. The feed template was created but it contains no products!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>
    <label class="inprocess"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your feed is being processed!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>
    <label class="finished"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your feed is ready!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>
    <div id="lotmyBarcontainer">
      <div id="lotmyBar"></div>
    </div>
    <div id="lotmyBarNumbers"></div>
    <div id="viewfeed"><a href='#' target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</a>
        <div class="clearfix"></div>
    <button id="closeprogress"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</button>
    </div>
    
</div>


<?php if (!empty($_smarty_tpl->tpl_vars['existingfeeds']->value)) {?>
<div class="panel" id="existingfeeds">
    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your templates','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</legend>	
<div class="row moduleconfig-content">
			<div class="col-xs-12">

 <div id="deleteddok"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The feed template was successfully deleted ! The page will now reload!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</div>    
                                                                                                                                                               
          <div id="deletederror"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ERROR: The feed template was not deleted !','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</div>                                                                                     						
			
<table class="table std">
<tr><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</th><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</th><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</th><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date add','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</th><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</th></tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['existingfeeds']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
<div id="editheader_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" class="hide"><?php echo $_smarty_tpl->tpl_vars['f']->value['header'];?>
</div>
<div id="editcode_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" class="hide"><?php echo $_smarty_tpl->tpl_vars['f']->value['editcode'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['f']->value['type'] == 'csv') {?>
<div id="csvcode_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" class="hide"><?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
</div>
<?php }?>
<div id="editfooter_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" class="hide"><?php echo $_smarty_tpl->tpl_vars['f']->value['footer'];?>
</div>

<input type="hidden" id="editfeedid_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
">
<input type="hidden" id="editfeedname_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
">
<input type="hidden" id="editfeedtype_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['type'];?>
">
<input type="hidden" id="editvalueseparator_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['valueseparator'];?>
">
<input type="hidden" id="editfielseparator_<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['fielseparator'];?>
">
    <tr><td><?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value['type'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value['date_add'];?>
</td><td><a href="?controller=AdminLotExporterGoogle&token=<?php echo $_smarty_tpl->tpl_vars['pagetoken']->value;?>
&editfeed=<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
"><img src="../img/admin/edit.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit feed template','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
" /></a><a href="<?php echo $_smarty_tpl->tpl_vars['feed_link']->value;?>
&id_feed=<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" target="_blank"><img src="../img/admin/details.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See feed online','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
" /></a><a href="<?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
&id_feed=<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" target="_blank"><img src="../img/admin/arrow_down.png" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
" /></a>
        <img class="sodgetlinkbtn" src="../img/admin/external_link.png" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get direct link to feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
" onclick="getdirectlink('<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
')" /><img class="soddetelebtn" src="../img/admin/delete.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete template and feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
" onclick="deletefeed('<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
')" /></td></tr><tr id="alert_feed-<?php echo $_smarty_tpl->tpl_vars['f']->value['id_feed'];?>
" class="alertrow"><td colspan="5"><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The direct link to feed is:','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label><input type="text" value=""/></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>			
    </div>
    </div> 

    
    
<div id="cronlink" class="alert alert-info">    
    
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order for your feeds to be up to date and contain all the changes made to your product catalog you have to add the link bellow to your cron tasks. You can do that from your server(cpanel) cron jobs section or by using the Prestashop "Cron tasks manager" module with webservice activated. If you don\'t know how contact your hosting service provider or your shop developer.','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</p>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['cron_link']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cron_link']->value;?>
</a></p>   
        
</div>                                                            
                                                                    
       			   			       			   			
</div>
<?php }?>

<!--
<div class="panel" id="filterproducts">
    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Matching with Google Categories','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</legend>	
<div class="row moduleconfig-content">
    <div class="col-xs-12"> 
            <div id="button_to_google_match">    
               <?php if ((!Configuration::get('LOT_EXPORTERGOOGLE_MAIN_GCID'))) {?>
               <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You haven\'t configured the main Google category. Please do in order to avoid rejection of your catalog in Google Merchant Center. Use the button bellow.','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</p>
                <?php } elseif ((Configuration::get('LOT_EXPORTERGOOGLE_MAIN_GCID') == 0)) {?>
                <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You haven\'t configured the main Google category. Please do in order to avoid rejection of your catalog in Google Merchant Center. Use the button bellow.','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</p>
               <?php }?>
                <p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For better listing on Google Merchant Center is highly recommended to match your shop categories with Google categories, if you haven\'t already done this. Click the button below.','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</b></p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['googlmatch_controller_link']->value;?>
" target="_blank"><button class="button btn exclusive"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Matching with Google Categories','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</span></button></a>            
            </div>   

    </div>
    </div>
</div>          
-->

<div class="panel" id="filterproducts">   

    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter products','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</legend>	
<div class="row moduleconfig-content">
			<div class="col-xs-12">
			
    <input style="display: none;" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if ($_smarty_tpl->tpl_vars['restrictions']->value['only_active'] == 1) {?>checked="checked"<?php }
} else { ?>checked="checked"<?php }?> id="onlyactive" value="1" /><!--<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only active products','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>-->
    <div class="clear"></div>	
<input style="display: none;" type="checkbox" id="combsep" value="0" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if ($_smarty_tpl->tpl_vars['restrictions']->value['combsep'] == 1) {?>checked="checked"<?php }
}?> /><!--<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consider product combination as separate product','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
	</label>-->        		
			<div class="clear"></div>	
<p class="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If no category, feed or manufacturer is selected, all products will be included in the feed.','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</p>
	<div class="clear"></div>			
<label>Category</label>
<div class="multiple_selection_box"></div>	
<div class="clear"></div>		
<select id="filter_category" class="category_tree multiple" data-style="btn-primary" multiple data-max-options="100">
<?php if (!empty($_smarty_tpl->tpl_vars['allcategories']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcategories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value['id'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value['name'],'html','UTF-8' ));?>
</option>
    <?php if (!empty($_smarty_tpl->tpl_vars['c']->value['children'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value['children'], 'cc');
$_smarty_tpl->tpl_vars['cc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cc']->value) {
$_smarty_tpl->tpl_vars['cc']->do_else = false;
?>
    <option class="cc <?php if (!empty($_smarty_tpl->tpl_vars['cc']->value['children'])) {?>withsubs<?php }?>" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cc']->value['id'],'html','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['cc']->value['id'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_category'])) {?>selected="selected"<?php }
}?> ><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cc']->value['name'],'html','UTF-8' ));?>
</option>
    <?php if (!empty($_smarty_tpl->tpl_vars['cc']->value['children'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cc']->value['children'], 'ccc');
$_smarty_tpl->tpl_vars['ccc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ccc']->value) {
$_smarty_tpl->tpl_vars['ccc']->do_else = false;
?>
    <option class="ccc children-<?php echo $_smarty_tpl->tpl_vars['cc']->value['id'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['ccc']->value['children'])) {?>withsubs<?php }?>" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ccc']->value['id'],'html','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['ccc']->value['id'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_category'])) {?>selected="selected"<?php }
}?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ccc']->value['name'],'html','UTF-8' ));?>
</option>
    <?php if (!empty($_smarty_tpl->tpl_vars['ccc']->value['children'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ccc']->value['children'], 'cccc');
$_smarty_tpl->tpl_vars['cccc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cccc']->value) {
$_smarty_tpl->tpl_vars['cccc']->do_else = false;
?>
    <option class="cccc children-<?php echo $_smarty_tpl->tpl_vars['ccc']->value['id'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['cccc']->value['children'])) {?>withsubs<?php }?>" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cccc']->value['id'],'html','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['cccc']->value['id'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_category'])) {?>selected="selected"<?php }
}?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cccc']->value['name'],'html','UTF-8' ));?>
</option>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['cccc']->value['children'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cccc']->value['children'], 'ccccc');
$_smarty_tpl->tpl_vars['ccccc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ccccc']->value) {
$_smarty_tpl->tpl_vars['ccccc']->do_else = false;
?>
    <option class="ccccc children-<?php echo $_smarty_tpl->tpl_vars['cccc']->value['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ccccc']->value['id'],'html','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['ccccc']->value['id'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_category'])) {?>selected="selected"<?php }
}?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ccccc']->value['name'],'html','UTF-8' ));?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</select>
<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'multiple selection allowed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</small>        
   <div class="clear"></div>	             		
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturer','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>			
<select id="filter_manufacturer" class="selectpicker" data-style="btn-primary" multiple data-max-options="100">	
   <?php if (!empty($_smarty_tpl->tpl_vars['allmanufacturers']->value)) {?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allmanufacturers']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['m']->value['id_manufacturer'],'html','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['m']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_manufacturer'])) {?>selected="selected"<?php }
}?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['m']->value['name'],'html','UTF-8' ));?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php }?>
</select>   
<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'multiple selection allowed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</small>                   		
 <div class="clear"></div>	 
                
<!--<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>	-->		
<select style="display:none;" id="filter_feature" class="selectpicker" data-style="btn-primary" multiple data-max-options="100">
    <?php if (!empty($_smarty_tpl->tpl_vars['allfeatures']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allfeatures']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['f']->value['feature'];?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['f']->value['values'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value['values'], 'fv');
$_smarty_tpl->tpl_vars['fv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['fv']->value['val'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['fv']->value['val'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_feature'])) {?>selected="selected"<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['fv']->value['display'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</select>   
<!--<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'multiple selection allowed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
 *<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'only predefined values included','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</small>-->

 <!--<div class="clear"></div>	
  <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>	-->		
<select style="display:none;" id="filter_attribute" class="selectpicker" data-style="btn-primary" multiple data-max-options="100">	
     <?php if (!empty($_smarty_tpl->tpl_vars['allattributes']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allattributes']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['f']->value['values'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value['values'], 'fv');
$_smarty_tpl->tpl_vars['fv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['fv']->value['val'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['restrictions']->value)) {
if (in_array($_smarty_tpl->tpl_vars['fv']->value['val'],$_smarty_tpl->tpl_vars['restrictions']->value['filter_attribute'])) {?>selected="selected"<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['fv']->value['display'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</select>   
<!--<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'multiple selection allowed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</small> -->
<div class="clear"></div>	
 

   
    </div>
    </div>
</div>    		       		
			
  


<div class="panel" id="feedoptions">   

<legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feed options','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</legend>	
<div class="row moduleconfig-content">
<div class="col-xs-12">
    
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product ID prefix','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<input type="text" id="idprefix" class="smallinput" value="<?php if ((isset($_smarty_tpl->tpl_vars['feedsettings']->value['idprefix']))) {
echo $_smarty_tpl->tpl_vars['feedsettings']->value['idprefix'];
}?>" />             
<div class="clear"></div>	
    
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<select id="currency">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Currency::getCurrencies(), 'cur');
$_smarty_tpl->tpl_vars['cur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cur']->value) {
$_smarty_tpl->tpl_vars['cur']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['cur']->value['id_currency'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['feedsettings']->value['currency']))) {
if ($_smarty_tpl->tpl_vars['feedsettings']->value['currency'] == $_smarty_tpl->tpl_vars['cur']->value['id_currency']) {?>selected="selected"<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['cur']->value['iso_code'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>     
<div class="clear"></div>	
    
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 0) {?>
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose language','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<select id="limba">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id_lang'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['feedsettings']->value['id_lang']))) {
if ($_smarty_tpl->tpl_vars['feedsettings']->value['id_lang'] == $_smarty_tpl->tpl_vars['l']->value['id_lang']) {?>selected="selected"<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['l']->value['iso_code'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>                
<div class="clear"></div>	
<?php }?>    
    
    
<!--    
<?php if ((isset($_smarty_tpl->tpl_vars['googlecategories']->value))) {?>
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Google Product ca','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<select id="googleproductcategory" class="selectpicker" data-show-subtext="false" data-live-search="true">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['googlecategories']->value, 'gc');
$_smarty_tpl->tpl_vars['gc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gc']->value) {
$_smarty_tpl->tpl_vars['gc']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['gc']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['gc']->value;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>                
<div class="clear"></div>	
<?php }?>
-->
    
<?php if ((isset($_smarty_tpl->tpl_vars['image_formats']->value))) {?>
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Type','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<select id="image_formats" class="smallinput">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_formats']->value, 'imf');
$_smarty_tpl->tpl_vars['imf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['imf']->value) {
$_smarty_tpl->tpl_vars['imf']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['imf']->value['name'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['feedsettings']->value['image_formats']))) {
if ($_smarty_tpl->tpl_vars['feedsettings']->value['image_formats'] == $_smarty_tpl->tpl_vars['imf']->value['name']) {?>selected="selected"<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['imf']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>                
<div class="clear"></div>	
<?php }?>    
 
<!--    
<?php if ((isset($_smarty_tpl->tpl_vars['attributes']->value))) {?>
<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Google Product ca','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>  
<select id="image_formats">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'atr');
$_smarty_tpl->tpl_vars['atr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['atr']->value) {
$_smarty_tpl->tpl_vars['atr']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['imf']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['atr']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>                
<div class="clear"></div>	
<?php }?>  
-->
    
                
</div> 
</div> 
</div>    


  

<div class="panel">   

    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</legend>	
<div class="row moduleconfig-content">
			<div class="col-xs-12">
                
               
<div class="form-group">
   <input type="hidden" id="feedid" name="feedid" value="<?php if ((isset($_smarty_tpl->tpl_vars['feedid']->value))) {
echo $_smarty_tpl->tpl_vars['feedid']->value;
} else { ?>0<?php }?>" />
    <label for="feedname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>          
    <input type="text" id="feedname" name="feedname" value="" />
      
                </div>                                            
                
<div class="form-group">
    <label for="feedtype"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>              
    <select id="feedtype" name="feedtype">
        <option value="xml" <?php if ((isset($_smarty_tpl->tpl_vars['feedtype']->value))) {
if ($_smarty_tpl->tpl_vars['feedtype']->value == 'xml') {?>selected="selected"<?php }
}?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'xml','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</option>
        <option value="csv" <?php if ((isset($_smarty_tpl->tpl_vars['feedtype']->value))) {
if ($_smarty_tpl->tpl_vars['feedtype']->value == 'csv') {?>selected="selected"<?php }
}?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'csv','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</option>
    </select>          
</div> 			

						
    <div class="form-group" style="display:none;">
    <label for="feedheader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>              
    <textarea id="feedheader" name="feedheader"></textarea>          
                </div> 
                
                        

               
                                               
                </div> 
                
                                                    
    <div class="form-group" style="display:none;">
    <label for="feedheader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</label>              
    <textarea id="feedfooter" name="feedfooter"></textarea>          
                </div> 
                                                                                                                                                              
                 
        <div id="feedsavedok"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The feed template was successfully saved ! Now the feed is collecting data. Please wait!','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</div>    
                                                                                                                                                               
          <div id="feedsavederror"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ERROR: The feed template was not saved !','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</div>                                                                                                                                                             
                                                                                                                                                                                                                                                                                                                                                                                                                                                           
      <div class="submit"> 
         <div class="waiting"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/loading.gif"></div>          
          <button id="submitfeedformat" class="button btn exclusive" onclick="savefeed(0);"><span><?php if ((isset($_GET['editfeed']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create feed','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );
}?></span></button> 
          <?php if ((isset($_GET['editfeed']))) {?>
          <button id="canceleditfeed" class="button btn exclusive" onclick="canceledit();"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</span></button><?php }?> 
        <button id="exportfile" class="button btn exclusive" onclick="savefeed(1);"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export as file','mod'=>'lot_exportergoogle'),$_smarty_tpl ) );?>
</span></button>               
                </div>                                                                                                                                                                                                                                               
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                                                                                                                                                                
          
			</div>
		</div>

 <?php }
}
