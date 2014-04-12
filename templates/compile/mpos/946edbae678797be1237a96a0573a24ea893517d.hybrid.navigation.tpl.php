<?php /* Smarty version Smarty-3.1.16, created on 2014-01-26 11:29:09
         compiled from "hybrid:global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79722229452de17e73fb6e9-02696973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946edbae678797be1237a96a0573a24ea893517d' => 
    array (
      0 => 'hybrid:global/navigation.tpl',
      1 => 1390706949,
      2 => 'hybrid',
    ),
  ),
  'nocache_hash' => '79722229452de17e73fb6e9-02696973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de17e7860925_26170159',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de17e7860925_26170159')) {function content_52de17e7860925_26170159($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
">主页 Home</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
    <h3>我的帐户 My Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard">控制台 Dashboard</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">账户 Edit Account</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">矿工 My Workers</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=transactions">交易 Transactions</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']) {?><li class="icon-megaphone"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications">通知 Notifications</a></li><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']) {?><li class="icon-plus"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=invitations">邀请 Invitations</a></li><?php }?>
      <li class="icon-barcode"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=qrcode">二维码 QR Codes</a></li>
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1) {?>
    <h3>管理面板 Admin Panel</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=dashboard">仪表盘 Dashboard</a></li>
      <li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring">监控 Monitoring</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user">用户信息 User Info</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet">钱包信息 Wallet Info</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=transactions">交易 Transactions</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=settings">设置 Settings</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=news">新闻 News</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=reports">报告 Reports</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=poolworkers">矿工 Pool Workers</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=templates">模板 Templates</a></li>
    </ul>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
    <h3>矿池统计 Statistics</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">矿池 Pool</a></li>
      <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">区块 Blocks</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=graphs">图表 Graphs</a></li>
      <li class="icon-record"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">记录 Round</a></li>
      <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">发现者 Finder</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)) {?><li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=uptime">运行时间 Uptime</a></li><?php }?>
    </ul>
    <?php } else { ?>
    <h3>状态 Statistics</h3>
    <ul class="toggle">
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']) {?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">矿池 Pool</a></li>
     <?php } else { ?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics">统计 Statistics</a>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']) {?>
     <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">出块 Blocks</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']) {?>
     <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">记录 Round</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']) {?>
     <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">发现者 Finder</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']) {?>
     <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)) {?><li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=uptime">运行时间 Uptime</a></li><?php }?>
     <?php }?>
    </ul>
    <?php }?>
    <h3>帮助 Help</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=gettingstarted">入门 Getting Started</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['about']['disabled']) {?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=pool">关于我们 About</a></li>
      <?php }?>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['donors']['disabled']) {?>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=donors">Donors</a></li>
      <?php }?>
    </ul>
    <h3>其它 Other</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">联系 Contact</a></li>
      <?php }?>
      <li class="icon-off"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout">退出 Logout</a></li>
      <?php } else { ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login">登录 Login</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">注册 Sign Up</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">联系 Contact</a></li>
      <?php }?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=tac">条款 Terms</a></li>
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
      <i><u><b><font size="2">实时状态 LIVE STATS</font></b></u></i>
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
