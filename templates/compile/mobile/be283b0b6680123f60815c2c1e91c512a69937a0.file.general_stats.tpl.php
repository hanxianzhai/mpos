<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:13:10
         compiled from "./templates/mobile/statistics/pool/general_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188408876952e7ace6c748f2-55602117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be283b0b6680123f60815c2c1e91c512a69937a0' => 
    array (
      0 => './templates/mobile/statistics/pool/general_stats.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188408876952e7ace6c748f2-55602117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'CURRENTBLOCKHASH' => 0,
    'LASTBLOCKHASH' => 0,
    'LASTBLOCK' => 0,
    'DIFFICULTY' => 0,
    'NETWORK' => 0,
    'ESTTIME' => 0,
    'TIMESINCELAST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e7ace6de3531_60187770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7ace6de3531_60187770')) {function content_52e7ace6de3531_60187770($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include './include/smarty/libs/plugins/modifier.seconds_to_words.php';
?><table>
  <tbody>
    <tr>
      <td class="leftheader">Pool Hash Rate</td>
      <td colspan="4"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']),"3");?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
    </tr>
    <tr>
      <td class="leftheader">Pool Efficiency</td>
      <td colspan="4"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format((100-(100/$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']*$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])),"2");?>
<?php } else { ?>0<?php }?> %</td>
    </tr>
    <tr>
      <td class="leftheader">Current Active Workers</td>
      <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
    </tr>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
    <tr>
      <td class="leftheader">Next Network Block</td>
      <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp;<font size="1"> (Current: <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCKHASH']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</a></font></td>
    </tr>
    <?php } else { ?>
    <tr>
      <td class="leftheader">Next Network Block</td>
      <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp; (Current: <?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</td>
    </tr>
    <?php }?>
    <tr>
      <td class="leftheader">Last Block Found</td>
      <td colspan="4"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['LASTBLOCKHASH']->value;?>
" target="_new"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
</a><?php } else { ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php }?></td>
    </tr>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
    <tr>
      <td class="leftheader">Current Difficulty</td>
      <td colspan="4"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
    </tr>
    <tr>
      <td class="leftheader">Est. Next Difficulty</td>
      <td colspan="4"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'];?>
</a></td>
    </tr>
    <?php }?>
    <tr>
      <td class="leftheader">Est. Avg. Time per Round (Network)</td>
      <td colspan="4"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
    </tr>
    <tr>
      <td class="leftheader">Est. Avg. Time per Round (Pool)</td>
      <td colspan="4"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['ESTTIME']->value);?>
</td>
    </tr>
    <tr>
      <td class="leftheader">Est. Shares this Round</td>
      <td colspan="4"><?php echo number_format(((65536*$_smarty_tpl->tpl_vars['DIFFICULTY']->value)/pow(2,($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff']-16))),"0");?>
 <font size="1">(done: <?php echo number_format((100/((65536*$_smarty_tpl->tpl_vars['DIFFICULTY']->value)/pow(2,($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff']-16)))*$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']),"2");?>
 %)</td>
    </tr>
    <tr>
      <td class="leftheader">Time Since Last Block</td>
      <td colspan="4"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['TIMESINCELAST']->value);?>
</td>
    </tr>
  </tbody>
</table>
<?php }} ?>
