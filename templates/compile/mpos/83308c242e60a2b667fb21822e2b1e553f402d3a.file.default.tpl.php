<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:05:39
         compiled from "./templates/mpos/admin/user/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127419863352dd4953e962b5-83000878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83308c242e60a2b667fb21822e2b1e553f402d3a' => 
    array (
      0 => './templates/mpos/admin/user/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127419863352dd4953e962b5-83000878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIMIT' => 0,
    'FILTERS' => 0,
    'ADMIN' => 0,
    'LOCKED' => 0,
    'NOFEE' => 0,
    'GLOBAL' => 0,
    'USERS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd49543d6550_94776142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd49543d6550_94776142')) {function content_52dd49543d6550_94776142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins/modifier.date_format.php';
?><script language="javascript">
    function storeFee(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=fee&account_id=" + id,
     });
    }
    function storeLock(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=lock&account_id=" + id,
     });
    }
    function storeAdmin(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=admin&account_id=" + id,
     });
    }
</script>

<article class="module width_full">
  <header><h3>User Search</h3></header>
  <div class="module_content">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="do" value="query" />
    <table cellspacing="0" class="tablesorter">
    <tbody>
      <tr>
        <td align="left">
<?php if ((($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><i class="icon-left-open"></i></a>
<?php } else { ?>
          <i class="icon-left-open"></i>
<?php }?>
        </td>
        <td align="right">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><i class="icon-right-open"></i></a>
        </td>
    </tbody>
  </table>
    <fieldset>
      <label>Account</label>
      <input size="20" type="text" name="filter[account]" value="<?php echo (($tmp = @$_REQUEST['filter']['account'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </fieldset>
    <fieldset>
      <label>E-Mail</label>
      <input size="20" type="text" name="filter[email]" value="<?php echo (($tmp = @$_REQUEST['filter']['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </fieldset>
    <fieldset>
      <label>Is Admin</label>
      <?php echo smarty_function_html_options(array('name'=>"filter[is_admin]",'options'=>$_smarty_tpl->tpl_vars['ADMIN']->value,'selected'=>(($tmp = @$_REQUEST['filter']['is_admin'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

    </fieldset>
    <fieldset>
      <label>Is Locked</label>
      <?php echo smarty_function_html_options(array('name'=>"filter[is_locked]",'options'=>$_smarty_tpl->tpl_vars['LOCKED']->value,'selected'=>(($tmp = @$_REQUEST['filter']['is_locked'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

    </fieldset>
    <fieldset>
      <label>No Fees</label>
      <?php echo smarty_function_html_options(array('name'=>"filter[no_fees]",'options'=>$_smarty_tpl->tpl_vars['NOFEE']->value,'selected'=>(($tmp = @$_REQUEST['filter']['no_fees'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

    </fieldset>
    <ul>
      <li>Note: Text search fields support '%' as wildcard.</li>
    </ul>
  </div>
  <footer>
    <div class="submit_link">
      <input type="submit" value="Search" class="alt_btn">
    </div>
  </footer>
</form>
</article>

<article class="module width_full">
  <header>
    <h3>User Information</h3>
  </header>
<table cellspacing="0" width="100%" class="tablesorter">
  <thead>
    <tr>
      <th align="center">ID</th>
      <th align="left">Username</th>
      <th align="left">E-Mail</th>
      <th align="right">Shares&nbsp;&nbsp;</th>
      <th align="right">Hashrate&nbsp;&nbsp;</th>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
      <th align="right">Est. Donation&nbsp;&nbsp;</th>
      <th align="right">Est. Payout&nbsp;&nbsp;&nbsp;</th>
<?php } else { ?>
      <th align="right" colspan="2">Est. 24 Hours&nbsp;&nbsp;&nbsp;</th>
<?php }?>
      <th align="right">Balance&nbsp;&nbsp;&nbsp;</th>
      <th align="right">Last Login&nbsp;&nbsp;&nbsp;</th>
      <th align="center">Admin</th>
      <th align="center">Locked</th>
      <th align="center">No Fees</th>
    </tr>
  </thead>
  <tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['USERS']->value)===null||$tmp==='' ? '' : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
    <tr>
      <td align="center"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
</td>
      <td align="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td align="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td align="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['shares']['valid'];?>
</td>
      <td align="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hashrate'];?>
</td>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['donation'],"8");?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['payout'],"8");?>
</td>
<?php } else { ?>
      <td align="right" colspan="2"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['hours24'],"8");?>
</td>
<?php }?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['balance'],"8");?>
</td>
      <td align="right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['last_login'],"%d/%m %H:%M:%S");?>
</td>
      <td align="center">
        <input type="hidden" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeAdmin(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_admin']) {?>checked<?php }?> />
        <label for="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td align="center">
        <input type="hidden" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeLock(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_locked']) {?>checked<?php }?> />
        <label for="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td align="center">
        <input type="hidden" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeFee(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['no_fees']) {?>checked<?php }?> />
        <label for="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
    </tr>
<?php endfor; else: ?>
  <tr>
    <td colspan="10"></td>
  </tr>
<?php endif; ?>

  </tbody>
</table>
</article>
<?php }} ?>
