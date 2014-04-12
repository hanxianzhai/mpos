<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:20
         compiled from "./templates/mpos/statistics/graphs/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206566210252dd51b0779399-73258543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42107fdc5070e6a0f5d9ada0697c00e0d2f73c6' => 
    array (
      0 => './templates/mpos/statistics/graphs/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206566210252dd51b0779399-73258543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51b08c2ca0_88881678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51b08c2ca0_88881678')) {function content_52dd51b08c2ca0_88881678($_smarty_tpl) {?><article class="module width_full">
  <header>
    <h3 class="tabs_involved">Stats</h3>
    <ul class="tabs">
        <li><a href="#mine">Mine</a></li>
        <li><a href="#pool">Pool</a></li>
        <li><a href="#both">Both</a></li>
    </ul>
  </header>
  <div class="tab_container">
<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1."/".$_tmp2."/mine.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3."/".$_tmp4."/pool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp5."/".$_tmp6."/both.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</article>
<?php }} ?>
