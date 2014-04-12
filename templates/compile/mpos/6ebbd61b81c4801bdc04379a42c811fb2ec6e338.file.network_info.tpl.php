<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:26:58
         compiled from "./templates/mpos/dashboard/network_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33144138852dd4042a646f0-47583701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ebbd61b81c4801bdc04379a42c811fb2ec6e338' => 
    array (
      0 => './templates/mpos/dashboard/network_info.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33144138852dd4042a646f0-47583701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NETWORK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4042a957f4_87890614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4042a957f4_87890614')) {function content_52dd4042a957f4_87890614($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include './include/smarty/libs/plugins/modifier.seconds_to_words.php';
?>         <tr>
           <td colspan="2"><b><u>Network Info</u></b></td>
         </tr>
         <tr>
           <td><b>Difficulty</b></td>
           <td id="b-diff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>Est Next Difficulty</b></td>
           <td id="b-nextdiff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</td>
         </tr>
         <tr>
           <td><b>Est. Avg. Time per Block</b></td>
           <td id="b-esttimeperblock" class="right"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
         </tr>
         <tr>
           <td><b>Current Block</b></td>
           <td id="b-nblock" class="right"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</td>
         </tr>
<?php }} ?>
