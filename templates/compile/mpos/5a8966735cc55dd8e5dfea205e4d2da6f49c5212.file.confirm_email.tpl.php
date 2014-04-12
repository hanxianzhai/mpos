<?php /* Smarty version Smarty-3.1.16, created on 2014-01-25 03:39:54
         compiled from "templates/mail/register/confirm_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193063422852e2c18ac7c4e4-26304879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a8966735cc55dd8e5dfea205e4d2da6f49c5212' => 
    array (
      0 => 'templates/mail/register/confirm_email.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193063422852e2c18ac7c4e4-26304879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e2c18ad98306_10373508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e2c18ad98306_10373508')) {function content_52e2c18ad98306_10373508($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have created a new account. In order to complete the registration process please follow this link:</p>
<p>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p></p>
<p>Cheers,</p>
<p>Website Administration</p>
</body>
</html>
<?php }} ?>
