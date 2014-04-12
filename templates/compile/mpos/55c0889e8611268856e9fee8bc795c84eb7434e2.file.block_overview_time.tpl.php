<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:56:09
         compiled from "./templates/mpos/statistics/blocks/block_overview_time.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75716496652dd4719443558-22574729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c0889e8611268856e9fee8bc795c84eb7434e2' => 
    array (
      0 => './templates/mpos/statistics/blocks/block_overview_time.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75716496652dd4719443558-22574729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIRSTBLOCKFOUND' => 0,
    'COINGENTIME' => 0,
    'LASTBLOCKSBYTIME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4719916d23_58974074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4719916d23_58974074')) {function content_52dd4719916d23_58974074($_smarty_tpl) {?><article class="module width_full">
  <header><h3>Block Overview</h3></header>
  <table width="100%" class="tablesorter" cellspacing="0">
    <thead>
        <tr>
          <th align="left"></th>
          <th align="center">Gen Est.</th>
          <th align="center">Found</th>
          <th align="center">Valid</th>
          <th align="center">Orphan</th>
          <th align="center">Avg Diff</th>
          <th align="center">Shares Est.</th>
          <th align="center">Shares</th>
          <th align="center">Percentage</th>
          <th align="center">Amount</th>
          <th align="center">Rate Est.</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th align="left" style="padding-left: 15px">All Time</td>
          <td align="center"><?php echo number_format(($_smarty_tpl->tpl_vars['FIRSTBLOCKFOUND']->value/$_smarty_tpl->tpl_vars['COINGENTIME']->value),"0");?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['Total'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['Total'])===null||$tmp==='' ? "0.00" : $tmp)/($_smarty_tpl->tpl_vars['FIRSTBLOCKFOUND']->value/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
        <tr>
          <th align="left" style="padding-left: 15px">Last Hour</td>
          <td align="center"><?php echo (3600/$_smarty_tpl->tpl_vars['COINGENTIME']->value);?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourTotal'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(3600/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
        <tr>
          <th align="left" style="padding-left: 15px">Last 24 Hours</td>
          <td align="center"><?php echo (86400/$_smarty_tpl->tpl_vars['COINGENTIME']->value);?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourTotal'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(86400/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
        <tr>
          <th align="left" style="padding-left: 15px">Last 7 Days</td>
          <td align="center"><?php echo (604800/$_smarty_tpl->tpl_vars['COINGENTIME']->value);?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysTotal'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(604800/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
        <tr>
          <th align="left" style="padding-left: 15px">Last 4 Weeks</td>
          <td align="center"><?php echo (2419200/$_smarty_tpl->tpl_vars['COINGENTIME']->value);?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksTotal'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(2419200/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
        <tr>
          <th align="left" style="padding-left: 15px">Last 12 Month</td>
          <td align="center"><?php echo (29030400/$_smarty_tpl->tpl_vars['COINGENTIME']->value);?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthTotal'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthOrphan'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid']>0) {?>
              <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid']),"4");?>

            <?php } else { ?>
              0
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares'];?>
</td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']>0) {?>
              <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']*100),"2");?>
%</font></b>
            <?php } else { ?>
              0.00%
            <?php }?>
          </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthAmount'];?>
</td>
          <td align="center"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(29030400/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
        </tr>
    </tbody>
  </table>
</article>
<?php }} ?>
