<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:15
         compiled from "templates/mail/notifications/locked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113160262352dd51ab06da05-16725233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031c37e45d2bec6f29fe00cfa587d28edac3d291' => 
    array (
      0 => 'templates/mail/notifications/locked.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113160262352dd51ab06da05-16725233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51ab0b1461_55334226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51ab0b1461_55334226')) {function content_52dd51ab0b1461_55334226($_smarty_tpl) {?><html>
<body>
<p>You account has been locked due to too many failed password or PIN attempts. Please follow the URL below to unlock your account.</p>
<p>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
