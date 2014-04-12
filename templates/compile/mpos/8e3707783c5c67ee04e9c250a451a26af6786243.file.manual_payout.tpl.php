<?php /* Smarty version Smarty-3.1.16, created on 2014-02-26 14:09:02
         compiled from "../templates/mail/notifications/manual_payout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754099879530d84fed1e3a5-32495576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e3707783c5c67ee04e9c250a451a26af6786243' => 
    array (
      0 => '../templates/mail/notifications/manual_payout.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754099879530d84fed1e3a5-32495576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530d84fedf5f33_64140201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d84fedf5f33_64140201')) {function content_530d84fedf5f33_64140201($_smarty_tpl) {?><html>
<body>
<p>An manual payout request completed.</p>
<p>Amount: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
