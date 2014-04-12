<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 20:59:43
         compiled from "./templates/mobile/statistics//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185717132352dfc0bf436e45-73411762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b850d730af57c838806dffcb5627cff770d35c4' => 
    array (
      0 => './templates/mobile/statistics//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185717132352dfc0bf436e45-73411762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'DIFFICULTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dfc0bf4e1880_65066177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dfc0bf4e1880_65066177')) {function content_52dfc0bf4e1880_65066177($_smarty_tpl) {?><table class="" width="50%" style="font-size:14px;">
  <tbody>
  <tr>
    <td class="leftheader">Pool Hash Rate</td>
    <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']/1000;?>
 Mhash/s</td>
  </tr>
  <tr>
    <td class="leftheader">Current Total Miners</td>
    <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
  </tr>
  <tr>
    <td class="leftheader">Current Block</td>
    <td><a href="http://explorer.litecoin.net/search?q=<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
</a></td>
  </tr>
  <tr>
    <td class="leftheader">Current Difficulty</td>
    <td><a href="http://allchains.info/" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
  </tr>
  </tbody>
</table>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website']['api']['disabled']) {?><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=public" target="_api">HERE</a></li><?php }?>
<?php }} ?>
