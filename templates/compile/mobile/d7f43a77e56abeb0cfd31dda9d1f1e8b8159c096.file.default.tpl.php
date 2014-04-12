<?php /* Smarty version Smarty-3.1.16, created on 2014-02-01 20:01:10
         compiled from "./templates/mobile/dashboard//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171544302152ece206e74150-13194128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f43a77e56abeb0cfd31dda9d1f1e8b8159c096' => 
    array (
      0 => './templates/mobile/dashboard//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171544302152ece206e74150-13194128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ece206edbc22_22600156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ece206edbc22_22600156')) {function content_52ece206edbc22_22600156($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
  <?php $_smarty_tpl->tpl_vars['payout_system'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
