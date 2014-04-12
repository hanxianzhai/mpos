<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:39:27
         compiled from "./templates/mobile/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28919079052dd432fe26ed7-83653967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb793972f399b9c6284bff224545e46b7e45a55' => 
    array (
      0 => './templates/mobile/global/navigation.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28919079052dd432fe26ed7-83653967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd432fe82f62_34464704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd432fe82f62_34464704')) {function content_52dd432fe82f62_34464704($_smarty_tpl) {?>
        <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
        <a href="#left-sidebar" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Left Sidebar</a>
        <?php }?>
        <div data-role="navbar">
          <ul>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard" data-icon="grid" data-ajax="false">Dashboard</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers" data-icon="grid" data-ajax="false">Worker</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool" data-icon="grid" data-ajax="false">Statistics</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout" data-icon="gear" data-ajax="false">Logout</a></li>
            <?php } else { ?>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
" data-icon="info" data-ajax="false">News</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" data-icon="gear" data-ajax="false">Login</a></li>
            <?php }?>
          </ul>
        </div>
<?php }} ?>
