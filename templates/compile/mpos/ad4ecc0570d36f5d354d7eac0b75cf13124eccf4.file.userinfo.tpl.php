<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:23:02
         compiled from "./templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79753854752dd3f562e2368-17160870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4ecc0570d36f5d354d7eac0b75cf13124eccf4' => 
    array (
      0 => './templates/mpos/global/userinfo.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79753854752dd3f562e2368-17160870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd3f56304683_88620365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3f56304683_88620365')) {function content_52dd3f56304683_88620365($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)) {?>
            <p>Welcome <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php } else { ?>
            <p>Welcome Guest</p>
<?php }?>
    </div>
<?php }} ?>
