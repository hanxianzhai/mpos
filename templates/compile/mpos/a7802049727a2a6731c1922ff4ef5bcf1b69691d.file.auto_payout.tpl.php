<?php /* Smarty version Smarty-3.1.16, created on 2014-02-17 00:27:02
         compiled from "../templates/mail/notifications/auto_payout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6160358745300e6d617ad17-64745381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7802049727a2a6731c1922ff4ef5bcf1b69691d' => 
    array (
      0 => '../templates/mail/notifications/auto_payout.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6160358745300e6d617ad17-64745381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5300e6d623e501_36375702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300e6d623e501_36375702')) {function content_5300e6d623e501_36375702($_smarty_tpl) {?><html>
<body>
<p>An automated payout completed.</p>
<p>Amount: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
