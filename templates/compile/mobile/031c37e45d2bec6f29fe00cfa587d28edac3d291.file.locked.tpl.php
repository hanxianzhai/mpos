<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 09:55:45
         compiled from "templates/mail/notifications/locked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2006044207531d1ba1e4f8e0-81418653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2006044207531d1ba1e4f8e0-81418653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d1ba2093309_21269625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d1ba2093309_21269625')) {function content_531d1ba2093309_21269625($_smarty_tpl) {?><html>
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
