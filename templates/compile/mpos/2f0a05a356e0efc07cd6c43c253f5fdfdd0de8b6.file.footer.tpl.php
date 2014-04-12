<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:23:02
         compiled from "./templates/mpos/global/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63963795352dd3f56749538-98519739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0a05a356e0efc07cd6c43c253f5fdfdd0de8b6' => 
    array (
      0 => './templates/mpos/global/footer.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63963795352dd3f56749538-98519739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd3f5676d428_48066626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3f5676d428_48066626')) {function content_52dd3f5676d428_48066626($_smarty_tpl) {?>    <p><strong>MPOS</strong> by TheSerapher, available on <a href="https://github.com/TheSerapher/php-mpos">GitHub</a></p>
    <p>Please <strong>Donate</strong> to TheSerapher LTC: Lge95QR2frp9y1wJufjUPCycVsg5gLJPW8</p>
    <p><strong>Copyright &copy; 2013 Sebastian Grewe</strong>, Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
    <?php if ($_smarty_tpl->tpl_vars['DEBUG']->value>0) {?>
    <div id="debug">
      <?php echo $_smarty_tpl->getSubTemplate ("system/debugger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php }?>
<?php }} ?>
