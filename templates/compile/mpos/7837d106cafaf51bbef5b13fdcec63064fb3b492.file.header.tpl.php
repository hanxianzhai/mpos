<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:23:02
         compiled from "./templates/mpos/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69951891852dd3f56297607-25096636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7837d106cafaf51bbef5b13fdcec63064fb3b492' => 
    array (
      0 => './templates/mpos/global/header.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69951891852dd3f56297607-25096636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd3f562dc277_48874849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3f562dc277_48874849')) {function content_52dd3f562dc277_48874849($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
?>    <hgroup>
      <h1 class="site_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</h1>
      <h2 class="section_title"><?php if ((($tmp = @htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp)) {?><?php echo smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true));?>
<?php } else { ?><?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
<?php }?></h2>
    </hgroup><?php }} ?>
