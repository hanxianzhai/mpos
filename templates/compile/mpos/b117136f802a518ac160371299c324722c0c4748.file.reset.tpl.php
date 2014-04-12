<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 16:52:37
         compiled from "templates/mail/password/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175540251152de3555e74b34-79704552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b117136f802a518ac160371299c324722c0c4748' => 
    array (
      0 => 'templates/mail/password/reset.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175540251152de3555e74b34-79704552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de3556040e32_99013468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de3556040e32_99013468')) {function content_52de3556040e32_99013468($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a password reset through our online form. In order to complete the request please follow this link:</p>
<p>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p>You will be asked to change your password. You can then use this new password to login to your account.</p>
<p>Cheers,</p>
<p>Website Administration</p>
</body>
</html>
<?php }} ?>
