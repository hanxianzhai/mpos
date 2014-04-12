<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:52:19
         compiled from "./templates/mpos/statistics/blockfinder/finder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41361956552dd4633bbdb79-43444424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840e9775992b5980474e609f0710bc713340bde6' => 
    array (
      0 => './templates/mpos/statistics/blockfinder/finder.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41361956552dd4633bbdb79-43444424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4633c66119_54934052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4633c66119_54934052')) {function content_52dd4633c66119_54934052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ALIGN'=>"right",'SHORT'=>true), 0);?>

<?php }?><?php }} ?>
