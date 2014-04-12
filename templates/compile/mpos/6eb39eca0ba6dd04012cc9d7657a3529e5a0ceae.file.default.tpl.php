<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:02:25
         compiled from "./templates/mpos/account/edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192512435752dd48918628f5-40219098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb39eca0ba6dd04012cc9d7657a3529e5a0ceae' => 
    array (
      0 => './templates/mpos/account/edit/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192512435752dd48918628f5-40219098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DETAILSUNLOCKED' => 0,
    'CTOKEN' => 0,
    'DETAILSSENT' => 0,
    'WITHDRAWSENT' => 0,
    'WITHDRAWUNLOCKED' => 0,
    'CHANGEPASSUNLOCKED' => 0,
    'CHANGEPASSSENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4891d87111_87528594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4891d87111_87528594')) {function content_52dd4891d87111_87528594($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updateAccount">
  <article class="module width_half">
    <header><h3>Account Details</h3></header>
    <div class="module_content">
      <fieldset>
        <label>Username</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
" disabled />
      </fieldset>
      <fieldset>
        <label>User Id</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
" disabled />
      </fieldset>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?>
      <fieldset>
        <label>API Key</label>
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getuserstatus&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
</a>
      </fieldset>
      <?php }?>
      <fieldset>
        <label>E-Mail</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['email'], ENT_QUOTES, 'UTF-8', true);?>
" size="20" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>Payment Address</label>
        <input type="text" name="paymentAddress" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['paymentAddress'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="40"  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>Donation Percentage</label>
        <font size="1"> Donation amount in percent (example: 0.5)</font>
        <input type="text" name="donatePercent" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['donatePercent'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="4" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>Automatic Payout Threshold</label>
        </br>
        <font size="1" style="margin: 0px -200px;"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min'];?>
-<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
. Set to '0' for no auto payout. A <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'],"8");?>
<?php }?>% <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 TX fee will apply <span id="tt"><img width="15px" height="15px" title="This <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'],"8");?>
<?php }?>% automatic payment transaction fee is a network fee and goes back into the network not the pool." src="site_assets/mpos/images/questionmark.png"></span></font>
        <input type="text" name="payoutThreshold" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['payoutThreshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['ap_threshold'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="<?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']);?>
" maxlength="<?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']);?>
" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>Anonymous Account</label>
        Hide username on website from others. Admins can still get your user information.
        <label class="checkbox" for="is_anonymous">
        <input class="ios-switch" type="hidden" name="is_anonymous" value="0" />
        <input class="ios-switch" type="checkbox" name="is_anonymous" value="1" id="is_anonymous" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_anonymous']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>disabled<?php }?>/>
        <div class="switch"></div>
        </label>
      </fieldset>
      <fieldset>
        <label>4 digit PIN</label>
        <font size="1">The 4 digit PIN you chose when registering</font>
        <input type="password" name="authPin" size="4" maxlength="4">
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
      
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("accountedit",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
        <input type="hidden" name="ea_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['ea_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
        <input type="hidden" name="utype" value="account_edit">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']) {?>
          <?php if ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==1&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==1) {?>
          	<input type="submit" value="Update Account" class="alt_btn">
          <?php } elseif ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==0&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['DETAILSSENT']->value==1&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==0) {?>
            <input type="submit" value="Update Account" class="alt_btn" disabled>
          <?php } elseif ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==0&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==0) {?>
            <input type="submit" value="Unlock" class="alt_btn" name="unlock">
          <?php }?>
        <?php } else { ?>
          <input type="submit" value="Update Account" class="alt_btn">
        <?php }?>
      
      </div>
    </footer>
  </article>
</form>

<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_payouts']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_manual_payouts']) {?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="cashOut">
  <article class="module width_half">
    <header>
      <h3>Cash Out</h3>
    </header>
    <div class="module_content">
      <p style="padding-left:3px; padding-redight:30px; font-size:10px;">
        Please note: a <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'],"8");?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 transaction will apply when processing "On-Demand" manual payments <span id="tt"><img width="15px" height="15px" title="This <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'],"8");?>
<?php }?>% manual payment transaction fee is a network fee and goes back into the network not the pool." src="site_assets/mpos/images/questionmark.png"></span>
      </p>
      <fieldset>
        <label>Account Balance</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 disabled />
      </fieldset>
      <fieldset>
        <label>Payout to</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
" disabled />
      </fieldset>
      <fieldset>
        <label>4 digit PIN</label>
        <input type="password" name="authPin" size="4" maxlength="4" />
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
      
        <input type="hidden" name="wf_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['wf_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("accountedit",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
        <input type="hidden" name="utype" value="withdraw_funds">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['withdraw']) {?>
          <?php if ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==1&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==1) {?>
          	<input type="submit" value="Cash Out" class="alt_btn">
          <?php } elseif ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==0&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==1&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==0) {?>
            <input type="submit" value="Cash Out" class="alt_btn" disabled>
          <?php } elseif ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==0&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==0) {?>
            <input type="submit" value="Unlock" class="alt_btn" name="unlock">
          <?php }?>
        <?php } else { ?>
          <input type="submit" value="Cash Out" class="alt_btn">
        <?php }?>
      
      </div>
    </footer>
  </article>
</form>
<?php }?>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post"><input type="hidden" name="act" value="updatePassword">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updatePassword">
  <article class="module width_half">
    <header>
      <h3>Change Password</h3>
    </header>
    <div class="module_content">
      <p style="padding-left:30px; padding-redight:30px; font-size:10px;">
      Note: You will be redirected to login on successful completion of a password change
      </p>
      <fieldset>
        <label>Current Password</label>
        <input type="password" name="currentPassword" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>New Password</label>
        <input type="password" name="newPassword" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>Repeat New Password</label>
        <input type="password" name="newPassword2" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>disabled<?php }?>/>
      </fieldset>
      <fieldset>
        <label>4 digit PIN</label>
        <input type="password" name="authPin" size="4" maxlength="4" />
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
      
        <input type="hidden" name="cp_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['cp_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("accountedit",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
        <input type="hidden" name="utype" value="change_pw">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']) {?>
          <?php if ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1) {?>
          	<input type="submit" value="Change Password" class="alt_btn">
          <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
            <input type="submit" value="Change Password" class="alt_btn" disabled>
          <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
            <input type="submit" value="Unlock" class="alt_btn" name="unlock">
          <?php }?>
        <?php } else { ?>
          <input type="submit" value="Change Password" class="alt_btn">
        <?php }?>
      
      </div>
    </footer>
  </article>
</form>


<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="genPin">
  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("editaccount",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	<article class="module width_half">
	  <header>
		  <h3>Reset PIN</h3>
		</header>
		<div class="module_content">
      <fieldset>
		  <label>Current Password</label>
		  <input type="password" name="currentPassword" />
		  </fieldset>
		</div>
		<footer>
      <div class="submit_link">
        <input type="submit" class="alt_btn" value="Reset PIN">
      </div>
    </footer>
  </article>
</form>
<?php }} ?>
