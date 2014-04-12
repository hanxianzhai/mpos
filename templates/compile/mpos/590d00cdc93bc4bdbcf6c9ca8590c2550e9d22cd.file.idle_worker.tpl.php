<?php /* Smarty version Smarty-3.1.16, created on 2014-02-07 14:33:09
         compiled from "../templates/mail/notifications/idle_worker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25822640052f47e2517db67-74499530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590d00cdc93bc4bdbcf6c9ca8590c2550e9d22cd' => 
    array (
      0 => '../templates/mail/notifications/idle_worker.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25822640052f47e2517db67-74499530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f47e252abd15_52753824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f47e252abd15_52753824')) {function content_52f47e252abd15_52753824($_smarty_tpl) {?><html>
<body>
<p>One of your workers is currently IDLE: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['worker'];?>
</p>
<p>We have not received any shares for this worker in the past 10 minutes.</p>
<p>Since monitoring is enabled for this worker, this notification was sent.</p>
<br />
<p>Please check your workers!</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
