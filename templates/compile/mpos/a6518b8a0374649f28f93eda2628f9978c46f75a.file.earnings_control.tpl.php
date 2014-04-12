<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 14:22:28
         compiled from "./templates/mpos/admin/reports/earnings_control.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92593139652de1224254736-70201702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6518b8a0374649f28f93eda2628f9978c46f75a' => 
    array (
      0 => './templates/mpos/admin/reports/earnings_control.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92593139652de1224254736-70201702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORTDATA' => 0,
    'BLOCKLIMIT' => 0,
    'USERID' => 0,
    'FILTER' => 0,
    'USERLIST' => 0,
    'HEIGHT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de12243292e0_71495927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de12243292e0_71495927')) {function content_52de12243292e0_71495927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins/function.html_options.php';
?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars(htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
">
<article class="module width_full">
  <header><h3>Earnings Information</h3></header>
<table class="tablesorter">
    <tbody>
        <td align="left">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['REPORTDATA']->value)&&count($_smarty_tpl->tpl_vars['REPORTDATA']->value)>($_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1)) {?><?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1]['height'];?>
<?php }?>&prev=1&limit=<?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
&filter=<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
"<i class="icon-left-open"></i></a>
        </td>
        <td align="right">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['REPORTDATA']->value)&&count($_smarty_tpl->tpl_vars['REPORTDATA']->value)>0) {?><?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[0]['height'];?>
<?php }?>&next=1&limit=<?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
&filter=<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
"><i class="icon-right-open"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
<table class="tablesorter">
    <tbody>
      <tr>
        <td>
          <fieldset style="width:200px; padding-right:8px;">
            <label>Select User</label>
            <?php echo smarty_function_html_options(array('name'=>"id",'options'=>$_smarty_tpl->tpl_vars['USERLIST']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['USERID']->value)===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

          </fieldset>
        </td>
        <td>
          <fieldset style="width:200px; padding-right:8px;">
            <label>Block Limit</label>
            <input size="10" type="text" name="limit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKLIMIT']->value)===null||$tmp==='' ? "20" : $tmp);?>
" />
          </fieldset>
        </td>
        <td>
          <fieldset style="width:200px; padding-right:8px;">
            <label>Starting block height</label>
            <input type="text" class="pin" name="search" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['HEIGHT']->value)===null||$tmp==='' ? "%" : $tmp);?>
">
          </fieldset>
        </td>
        <td><b>SHOW EMPTY ROUNDS</b><br><br>
          <span style="margin: 0px 28px;" class="toggle">
            <label for="filter">
            <input type="checkbox" class="ios-switch" name="filter" value="1" id="filter" <?php if ($_smarty_tpl->tpl_vars['FILTER']->value) {?>checked<?php }?> />
            <div class="switch"></div>
            </label>
          </span>
        </td>
    </tbody>
  </table>
  <footer>
    <div class="submit_link">
      <input type="submit" value="Submit" class="alt_btn">
    </div>
  </footer>
</article>
</form>
<?php }} ?>
