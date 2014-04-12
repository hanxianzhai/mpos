<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:23:02
         compiled from "./templates/mpos/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177440257152dd3f563ad7f5-21213952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22412f73ff56d100263e8e5c0122889635e94214' => 
    array (
      0 => './templates/mpos/global/navigation.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177440257152dd3f563ad7f5-21213952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd3f5665efe9_31905813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3f5665efe9_31905813')) {function content_52dd3f5665efe9_31905813($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
">Home</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
    <h3>My Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard">Dashboard</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">Edit Account</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">My Workers</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=transactions">Transactions</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']) {?><li class="icon-megaphone"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']) {?><li class="icon-plus"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=invitations">Invitations</a></li><?php }?>
      <li class="icon-barcode"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=qrcode">QR Codes</a></li>
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1) {?>
    <h3>Admin Panel</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=dashboard">Dashboard</a></li>
      <li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring">Monitoring</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user">User Info</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet">Wallet Info</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=transactions">Transactions</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=settings">Settings</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=news">News</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=reports">Reports</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=poolworkers">Pool Workers</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=templates">Templates</a></li>
    </ul>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
    <h3>Statistics</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">Pool</a></li>
      <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">Blocks</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=graphs">Graphs</a></li>
      <li class="icon-record"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">Round</a></li>
      <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">Finder</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)) {?><li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=uptime">Uptime</a></li><?php }?>
    </ul>
    <?php } else { ?>
    <h3>Statistics</h3>
    <ul class="toggle">
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']) {?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">Pool</a></li>
     <?php } else { ?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics">Statistics</a>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']) {?>
     <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">Blocks</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']) {?>
     <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">Round</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']) {?>
     <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">Finder</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']) {?>
     <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)) {?><li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=uptime">Uptime</a></li><?php }?>
     <?php }?>
    </ul>
    <?php }?>
    <h3>Help</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=gettingstarted">Getting Started</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['about']['disabled']) {?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=pool">About</a></li>
      <?php }?>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['donors']['disabled']) {?>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=donors">Donors</a></li>
      <?php }?>
    </ul>
    <h3>Other</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">Contact</a></li>
      <?php }?>
      <li class="icon-off"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout">Logout</a></li>
      <?php } else { ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login">Login</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">Sign Up</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">Contact</a></li>
      <?php }?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=tac">Terms and Conditions</a></li>
      <?php }?>
    </ul>
    <ul>
      <hr/>
    </ul>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
     <br />
    <?php } else { ?>
    <ul>
     <center>
      <div style="display: inline-block;">
      <i><u><b><font size="2">LIVE STATS</font></b></u></i>
      <div id="mr" style="width:180px; height:120px;"></div>
      <div id="hr" style="width:180px; height:120px;"></div>
      </div>
     </center>
    </ul>
    <hr/>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php }?>
<?php }} ?>
