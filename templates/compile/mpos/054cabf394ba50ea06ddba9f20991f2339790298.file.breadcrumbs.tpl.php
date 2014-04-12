<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:23:02
         compiled from "./templates/mpos/global/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161890049952dd3f56309754-71478747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054cabf394ba50ea06ddba9f20991f2339790298' => 
    array (
      0 => './templates/mpos/global/breadcrumbs.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161890049952dd3f56309754-71478747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd3f563a5d33_63942029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3f563a5d33_63942029')) {function content_52dd3f563a5d33_63942029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include './include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
?>    <div class="breadcrumbs_container">
      <article class="breadcrumbs"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</a> <div class="breadcrumb_divider"></div> <a class="<?php if (!(($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)) {?>current<?php }?>" <?php if ((($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)) {?>href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo smarty_modifier_replace(htmlspecialchars((($tmp = @$_REQUEST['page'])===null||$tmp==='' ? "home" : $tmp), ENT_QUOTES, 'UTF-8', true),'"','');?>
"<?php }?>><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Home" : $tmp)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php if ((($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)) {?> <div class="breadcrumb_divider"></div> <a class="current"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php }?></article>
    </div>
<?php }} ?>
