<?php /* Smarty version Smarty-3.1.16, created on 2014-01-25 00:17:24
         compiled from "./templates/mpos/about/donors/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131001558252e29214657184-87410877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b3c1ac4697a7f8779fc3be80c7ac60f180a1b0' => 
    array (
      0 => './templates/mpos/about/donors/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131001558252e29214657184-87410877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DONORS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e29214885979_90469460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e29214885979_90469460')) {function content_52e29214885979_90469460($_smarty_tpl) {?><article class="module width_full">
  <header>
    <h3>Pool Donors</h3>
    <div class="submit_link">
      <?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </header>
      <table class="tablesorter" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th align="right">%</th>
            <th align="right" style="padding-right: 25px"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Total</th>
          </tr>
        </thead>
        <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['name'] = 'donor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DONORS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total']);
?>
          <tr>
            <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['username'];?>
<?php }?></td>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donate_percent'];?>
</td>
            <td align="right" style="padding-right: 25px"><?php echo number_format($_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donation'],"2");?>
</td>
          </tr>
<?php endfor; else: ?>
          <tr>
            <td align="center" colspan="3">No confirmed donations yet, please be patient!</td>
          </tr>
<?php endif; ?>
        </tbody>
      </table>
</article>
<?php }} ?>
