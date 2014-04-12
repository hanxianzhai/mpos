<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:31:41
         compiled from "./templates/mpos/statistics//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36459408452dd4f6d1c30b2-95010215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fdd86744df62c6ab5ad824175f336854011afa' => 
    array (
      0 => './templates/mpos/statistics//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36459408452dd4f6d1c30b2-95010215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'DIFFICULTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4f6d28d249_38780507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4f6d28d249_38780507')) {function content_52dd4f6d28d249_38780507($_smarty_tpl) {?><article class="module width_full">
  <header><h3>General Statistics</h3></header>
  <div class="module_content">
    <table class="" width="50%" style="font-size:14px;">
      <tbody>
        <tr>
          <td class="leftheader">Pool Hash Rate</td>
          <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
        </tr>
        <tr>
          <td class="leftheader">Current Total Miners</td>
          <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
        </tr>
        <tr>
          <td class="leftheader">Current Block</td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
</a></td>
        </tr>
        <tr>
          <td class="leftheader">Current Difficulty</td>
          <td><a href="http://allchains.info/" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <footer>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?><ul><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=public" target="_api">HERE</a></li><?php }?>
  </footer>
</article>
<?php }} ?>
