<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:16
         compiled from "./templates/mpos/account/notifications/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43380407752dd51ac11a047-73853894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4693271a5732682aae9966c57bd614f0a64838f0' => 
    array (
      0 => './templates/mpos/account/notifications/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43380407752dd51ac11a047-73853894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
    'SETTINGS' => 0,
    'NOTIFICATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51ac352c80_58986711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51ac352c80_58986711')) {function content_52dd51ac352c80_58986711($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins/function.cycle.php';
?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="POST">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="save">
  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("notifications",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
  <article class="module width_quarter">
    <header>
      <h3>Notification Settings</h3>
    </header>
    <div class="module_content">
    <table width="100%">
      <tr>
        <th align="left">Type</th>
        <th align="center">Active</th>
      </tr>
      <tr>
        <td align="left">IDLE Worker</td>
        <td>
          <span class="toggle">
          <label for="data[idle_worker]">
          <input type="hidden" name="data[idle_worker]" value="0" />
          <input type="checkbox" class="ios-switch" name="data[idle_worker]" id="data[idle_worker]" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['idle_worker'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
          <div class="switch"></div>
          </label>
          </span>
        </td>
      </tr>
      <tr>
        <td align="left">New Blocks</td>
        <td>
          <span class="toggle">
          <label for="data[new_block]">
          <input type="hidden" name="data[new_block]" value="0" />
          <input type="checkbox" class="ios-switch" name="data[new_block]" id="data[new_block]" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['new_block'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
          <div class="switch"></div>
          </label>
          </span>
        </td>
      </tr>
      <tr>
        <td align="left">Auto Payout</td>
        <td>
          <span class="toggle">
          <label for="data[auto_payout]">
          <input type="hidden" name="data[auto_payout]" value="0" />
          <input type="checkbox" class="ios-switch" name="data[auto_payout]" id="data[auto_payout]" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['auto_payout'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
          <div class="switch"></div>
          </label>
          </span>
        </td>
      </tr>
      <tr>
        <td align="left">Manual Payout</td>
        <td>
          <span class="toggle">
          <label for="data[manual_payout]">
          <input type="hidden" name="data[manual_payout]" value="0" />
          <input type="checkbox" class="ios-switch" name="data[manual_payout]" id="data[manual_payout]" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['manual_payout'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
          <div class="switch"></div>
          </label>
          </span>
        </td>
      </tr>
      <tr>
        <td align="left">Successful Login</td>
        <td>
          <span class="toggle">
          <label for="data[success_login]">
          <input type="hidden" name="data[success_login]" value="0" />
          <input type="checkbox" class="ios-switch" name="data[success_login]" id="data[success_login]" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['success_login'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
          <div class="switch"></div>
          </label>
          </span>
        </td>
      </tr>
    </table>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Update" class="alt_btn">
      </div>
    </footer>
  </article>
</form>

<article class="module width_3_quarter">
  <header>
      <h3>Notification History</h3>
      <div class="submit_link"><?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
  </header>
  <table width="100%" class="tablesorterpager" cellspacing="0">
    <thead style="font-size:13px;">
      <tr>
        <th align="center" style="cursor: pointer;">ID</th>
        <th align="center" style="cursor: pointer;">Time</th>
        <th align="center" style="cursor: pointer;">Type</th>
        <th align="center" style="cursor: pointer;">Active</th>
      </tr>
    </thead>
    <tbody style="font-size:12px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['name'] = 'notification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NOTIFICATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total']);
?>
      <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['id'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['time'];?>
</td>
        <td align="center">
<?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='new_block') {?>New Block
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='auto_payout') {?>Auto Payout
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='idle_worker') {?>IDLE Worker
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='manual_payout') {?>Manual Payout
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='success_login') {?>Successful Login
<?php }?>
        </td>
        <td align="center">
          <i class="icon-<?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['active']) {?>ok<?php } else { ?>cancel<?php }?>"></i>
        </td>
      </tr>
<?php endfor; endif; ?>
    </tbody>
  </table>
</article>
<?php }} ?>
