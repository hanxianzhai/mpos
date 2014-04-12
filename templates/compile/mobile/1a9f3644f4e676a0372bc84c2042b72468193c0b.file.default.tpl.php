<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:13:10
         compiled from "./templates/mobile/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83741312152e7ace69bd4a4-79940768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9f3644f4e676a0372bc84c2042b72468193c0b' => 
    array (
      0 => './templates/mobile/statistics/pool/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83741312152e7ace69bd4a4-79940768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e7ace6a583f9_24624057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7ace6a583f9_24624057')) {function content_52e7ace6a583f9_24624057($_smarty_tpl) {?><div data-role="collapsible">
  <h3>User Hashrates</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
  <h3>User Shares</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
  <h3>General Stats</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
<h3>Last Blocks</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ALIGN'=>"right",'SHORT'=>true), 0);?>

</div>
<?php }} ?>
