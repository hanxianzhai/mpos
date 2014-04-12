<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:13:10
         compiled from "./templates/mobile/statistics/pool/contributors_hashrate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119874934052e7ace6a5e705-62898927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e98488bbe691ec286ce34e16e646d704ea6d97' => 
    array (
      0 => './templates/mobile/statistics/pool/contributors_hashrate.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119874934052e7ace6a5e705-62898927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CONTRIBHASHES' => 0,
    'DIFFICULTY' => 0,
    'REWARD' => 0,
    'CONTRIBSHARES' => 0,
    'rank' => 0,
    'estday' => 0,
    'listed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e7ace6b9ed38_89600311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7ace6b9ed38_89600311')) {function content_52e7ace6b9ed38_89600311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include './include/smarty/libs/plugins/function.math.php';
?>  <table data-role="table" id="hashes" data-mode="columntoggle">
    <thead>
      <tr>
        <th>Rank</th>
        <th>User Name</th>
        <th data-priority="critical" align="right">KH/s</th>
        <th data-priority="2" align="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/Day</th>
        <th data-priority="3" align="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
/Day</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['name'] = 'contrib';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total']);
?>
      <?php echo smarty_function_math(array('assign'=>"estday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']),$_smarty_tpl);?>

      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username']==$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account']) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><?php }?>
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</th>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']);?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['estday']->value,"3");?>
</td>
        <td align="right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['estday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
      <tr>
        <th>n/a</th>
        <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'];?>
</td>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['estday']->value,"3"))===null||$tmp==='' ? "n/a" : $tmp);?>
</td>
        <td align="right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['estday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td>
      </tr>
<?php }?>
    </tbody>
  </table>
<?php }} ?>
