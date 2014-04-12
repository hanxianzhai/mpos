<?php /* Smarty version Smarty-3.1.16, created on 2014-02-01 20:01:10
         compiled from "./templates/mobile/global/sidebar_prop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72806587352ece206c17df5-97186693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85a36589dcdae97088b45f0f9a76c2e92b5b212' => 
    array (
      0 => './templates/mobile/global/sidebar_prop.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72806587352ece206c17df5-97186693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ece206e64240_71007609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ece206e64240_71007609')) {function content_52ece206e64240_71007609($_smarty_tpl) {?>                <table width="100%">
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u>Your Stats</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Hashrate</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate']);?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
</td>
                    </tr>
                    <tr>
                      <td><b>Share Rate</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'],"2");?>
 S/s</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u>Round Shares</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Pool Valid</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</td>
                    </tr>
                    <tr>
                      <td><b>Your Valid<b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
<font size='1px'></font></b></td>
                    </tr>
                    <tr>
                      <td><b>Pool Invalid</b></td>
                      <td align="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)</font><?php }?></td>
                    </tr>
                    <tr>
                      <td><b>Your Invalid</b></td>
                      <td align="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)</font><?php }?></td>
                    </tr>

                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Round Estimate</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Block</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['block'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Fees</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['fee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Donation</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['donation'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Payout</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],"8");?>
</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr><td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance</u></b></td></tr>
                    <tr><td>Confirmed</td><td align="right"><b><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td></tr>
                    <tr><td>Unconfirmed</td><td align="right"><b><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td></tr>
                  </table>
<?php }} ?>
