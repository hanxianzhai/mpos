<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:44:33
         compiled from "./templates/mpos/gettingstarted//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170791390852dd446137fb50-32190619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6549a6f76821e79696e3df1ff2fad81f467b1177' => 
    array (
      0 => './templates/mpos/gettingstarted//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170791390852dd446137fb50-32190619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITESTRATUMURL' => 0,
    'SITESTRATUMPORT' => 0,
    'GLOBAL' => 0,
    'SITECOINNAME' => 0,
    'SITECOINURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd44614c92f8_74097003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd44614c92f8_74097003')) {function content_52dd44614c92f8_74097003($_smarty_tpl) {?><article class="module width_full">
  <header><h3>Getting Started Guide</h3></header>
  <div class="module_content">
    <li>1. <strong>Create account.</strong>
      <ul>
        <li>Register <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">here</a>, or login if you already have account</li>
        <li>Create a <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login</li>
      </ul>
    </li>
    <li>2. <strong>Download a miner.</strong>
      <ul>
        <li><em>CGMiner Linux/Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/" target="_blank">Download here</a></li>
        <li><em>CGMiner Mac OS X:</em> <a href="http://spaceman.ca/cgminer/" target="_blank">Download here</a></li>
        <li><em>CPU Miner Mac/Linux/Windows:</em> precompiled binaries are available <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850" target="_blank">Download here</a>.</li>
      </ul>
    </li>
    <li>3. <strong>Configure your miner.</strong>
      <p>Settings for Stratum (recommended):</p>
      <table width="50%">
        <tbody>
          <tr><td>STRATUM:</td><td><kbd>stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
</kbd></td></tr>
          <tr><td>PORT:</td><td><kbd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
</kbd></td></tr>
          <tr><td>Username:</td><td><kbd><em>Weblogin</em>.<em>Worker</em></kbd></td></tr>
          <tr><td>Password:</td><td><kbd>Worker Password</kbd></td></tr>
        </tbody>
      </table>
      <p>If you use a command-line miner, type:</p>
      <pre>./cgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?> -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>Worker</em> -p <em>Worker password</em></pre>
      <p>If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">Here</a></p>
    </li>
    <li>4. <strong>Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to recieve payments.</strong>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 client from <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">here</a>.
          <p>Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
    <li>5. <strong>Advanced cgminer settings / FAQ</strong>
      <ul>
        <li><a href="https://github.com/ckolivas/cgminer/blob/master/SCRYPT-README" target="_blank">Scrypt readme</a></li>
        <li>Don't set <b>intensity</b> too high, I=11 is standard and safest. Higher intensity takes more GPU RAM. Check for <b>hardware errors</b> in cgminer (HW). HW=0 is good, otherwise lower intensity :)</li>
        <li>Set shaders according to the readme (or look at your graphic cards specifications). Cgminer uses this value at first run to calculate <b>thread-concurrency</b>. Easiest way to get this optimized is to use same settings as others have used here: <a href="http://litecoin.info/Mining_Hardware_Comparison">here</a>.</li>
        <li>There's also an interesting project which gives you a GUI for cgminer. Windows only it seems.</li>
        <li>Here's a great <a href="https://docs.google.com/document/d/1Gw7YPYgMgNNU42skibULbJJUx_suP_CpjSEdSi8_z9U/preview?sle=true" target="_blank">guide</a> how to get up and running with Xubuntu.</li>
      </ul>
    </li>
  </div>
</article>
<?php }} ?>
