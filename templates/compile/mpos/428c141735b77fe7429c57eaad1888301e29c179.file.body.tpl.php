<?php /* Smarty version Smarty-3.1.16, created on 2014-01-23 08:43:46
         compiled from "templates/mail/contactform/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95773509152e065c208b1b7-29918932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428c141735b77fe7429c57eaad1888301e29c179' => 
    array (
      0 => 'templates/mail/contactform/body.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95773509152e065c208b1b7-29918932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e065c2145c46_75446367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e065c2145c46_75446367')) {function content_52e065c2145c46_75446367($_smarty_tpl) {?><html>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 Message,</p>
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderName'];?>
 Sent you a message</p>
<p>Senders Email: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderEmail'];?>
</p>
<p>Subject: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderSubject'];?>
</p>
<p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderMessage'];?>
</p>
<p></p>
</body>
</html>
<?php }} ?>
