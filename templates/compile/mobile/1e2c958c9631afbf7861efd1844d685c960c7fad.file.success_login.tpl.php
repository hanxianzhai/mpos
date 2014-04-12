<?php /* Smarty version Smarty-3.1.16, created on 2014-02-07 15:19:53
         compiled from "templates/mail/notifications/success_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105750093052f48919acb226-39155202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2c958c9631afbf7861efd1844d685c960c7fad' => 
    array (
      0 => 'templates/mail/notifications/success_login.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105750093052f48919acb226-39155202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOGINUSER' => 0,
    'LOGINIP' => 0,
    'LOGINTIME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f48919b150f8_22047855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f48919b150f8_22047855')) {function content_52f48919b150f8_22047855($_smarty_tpl) {?><html>
<body>
<p>Your account has successfully logged in</p>
<p>User: <?php echo $_smarty_tpl->tpl_vars['LOGINUSER']->value;?>
</p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['LOGINIP']->value;?>
</p>
<p>Time: <?php echo $_smarty_tpl->tpl_vars['LOGINTIME']->value;?>
</p>
<p>If you initiated this login, you can ignore this message. If you did NOT, please notify an administrator.</p>
<br/>
<br/>
</body>
</html><?php }} ?>
