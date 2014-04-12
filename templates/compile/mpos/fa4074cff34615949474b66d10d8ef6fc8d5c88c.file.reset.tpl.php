<?php /* Smarty version Smarty-3.1.16, created on 2014-03-01 23:28:16
         compiled from "templates/mail/pin/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11257997225311fc906b0af7-70836201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4074cff34615949474b66d10d8ef6fc8d5c88c' => 
    array (
      0 => 'templates/mail/pin/reset.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11257997225311fc906b0af7-70836201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5311fc90867e55_58937805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5311fc90867e55_58937805')) {function content_5311fc90867e55_58937805($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a PIN reset through our online form.</p>
<p>Randomly Generated PIN: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['pin'];?>
</p>
<p>Cheers,</p>
<p>Website Administration</p>
</body>
</html>
<?php }} ?>
