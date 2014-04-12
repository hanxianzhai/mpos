<?php /* Smarty version Smarty-3.1.16, created on 2014-01-26 11:32:15
         compiled from "hybrid:gettingstarted//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89574788452de67160c3465-14851366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e7ed130dd54f7ffcea9607667a6347e758e9d5' => 
    array (
      0 => 'hybrid:gettingstarted//default.tpl',
      1 => 1390706882,
      2 => 'hybrid',
    ),
  ),
  'nocache_hash' => '89574788452de67160c3465-14851366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de6716194ea4_83927474',
  'variables' => 
  array (
    'SITESTRATUMURL' => 0,
    'GLOBAL' => 0,
    'SITECOINNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de6716194ea4_83927474')) {function content_52de6716194ea4_83927474($_smarty_tpl) {?><article class="module width_full">
  <header><h3>入门指南 Getting Started Guide</h3></header>
  <div class="module_content">
    <li>1. <strong>创建帐户 Create account.</strong>
      <ul>
        <li>注册在这里，或登录如果您已经有帐户<br />Register <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">here</a>, or login if you already have account </li>
        <li>创建一个工作人员将由矿工被用来登录<br />Create a <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login </li>
      </ul>
    </li>
    <li>2. <strong>下载挖矿软件 Download a miner.</strong>
      <ul>
        <li><em>CGMiner Linux/Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/" target="_blank">Download here</a></li>
        <li><em>CGMiner Mac OS X:</em> <a href="http://spaceman.ca/cgminer/" target="_blank">Download here</a></li>
        <li><em>CPU Miner Mac/Linux/Windows:</em> precompiled binaries are available <a href="http://federalreservecoin.org" target="_blank">Download here</a>.</li>
      </ul>
    </li>
    <li>3. <strong>配置挖矿软件 Configure your miner.</strong>
      <p>设置（推荐）Settings for Stratum (recommended):</p>
      <table width="50%">
        <tbody>
          <tr><td>STRATUM:</td><td><kbd>stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
</kbd></td></tr>
          <tr><td>PORT:</td><td><kbd>8989</kbd></td></tr>
          <tr><td>Username:</td><td><kbd><em>Weblogin</em>.<em>Worker</em></kbd></td></tr>
          <tr><td>Password:</td><td><kbd>Worker Password</kbd></td></tr>
        </tbody>
      </table>
      <p>如果您使用的是命令行矿工，键入<br />If you use a command-line miner, type:</p>
      <pre>./cgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?> -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:8989 -u <em>Weblogin</em>.<em>Worker</em> -p <em>Worker password</em></pre>
      <p>如果你愿意，你可以创建其他工人的用户名和您所选择的密码在<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">这里</a><br />If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">Here</a></p>
    </li>
    <li>4. <strong>创建一个Litecoin地址才能收到付款。Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to recieve payments.</strong>
      <ul>
        <li>下载客户端＆块链：<a href="http://federalreservecoin.org/" target="_blank">下载FRSC客户端</a><br />Downloading the client & block chain: 	<a href="http://federalreservecoin.org/" target="_blank">Download the FRSC client</a>.
          <p>生成您的帐户页面一个新的地址，并输入到接收付款。<br />Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
    <li>5. <strong>高级cgminer设置/常见问题Advanced cgminer settings / FAQ</strong>
      <ul>
        <li>Scrypt说明<a href="https://github.com/ckolivas/cgminer/blob/master/SCRYPT-README" target="_blank">Scrypt readme</a></li>
        <li>不要设置强度过高，I = 11是标准的和最安全的。高强度需要更多的GPU内存。检查硬件错误的cgminer（HW）。HW = 0为好，否则低强度:)<br />Don't set <b>intensity</b> too high, I=11 is standard and safest. Higher intensity takes more GPU RAM. Check for <b>hardware errors</b> in cgminer (HW). HW=0 is good, otherwise lower intensity :)</li>
        <li>根据自述设置着色器（或者看看你的显卡规格）。Cgminer使用这个值在第一次运行时，计算线程并发。最容易得到这个优化的方法是使用相同的设置人在这里已经使用：<a href="http://litecoin.info/Mining_Hardware_Comparison">链接</a>。
<br />Set shaders according to the readme (or look at your graphic cards specifications). Cgminer uses this value at first run to calculate <b>thread-concurrency</b>. Easiest way to get this optimized is to use same settings as others have used here: <a href="http://litecoin.info/Mining_Hardware_Comparison">here</a>.</li>
        <li>还有一个有趣的项目，让你的GUI的cgminer。仅适用于Windows似乎。<br />There's also an interesting project which gives you a GUI for cgminer. Windows only it seems.</li>
        <li>这里是一个很好的<a href="https://docs.google.com/document/d/1Gw7YPYgMgNNU42skibULbJJUx_suP_CpjSEdSi8_z9U/preview?sle=true" target="_blank">指导文件</a>如何启动和Xubuntu上运行。<br />Here's a great <a href="https://docs.google.com/document/d/1Gw7YPYgMgNNU42skibULbJJUx_suP_CpjSEdSi8_z9U/preview?sle=true" target="_blank">guide</a> how to get up and running with Xubuntu.</li>
      </ul>
    </li>
  </div>
</article><?php }} ?>
